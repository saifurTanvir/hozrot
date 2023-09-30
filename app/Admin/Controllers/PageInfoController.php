<?php

namespace App\Admin\Controllers;

use App\Models\Header;
use App\Models\PageInfo;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Image;

class PageInfoController extends AdminController
{
    protected $title = 'Page Info';

    protected function grid()
    {
        $grid = new Grid(new PageInfo());

        $grid->column('id', __('Id'));
        $grid->column('title', __('Title'));
        $grid->column('page_name', __('page_name'));
        $grid->column('image', __('Image'))->image("/uploads/");
        $grid->column('description', __('Description'))->display(function ($detail){
            return $detail;
        });
        $grid->column('createdUser.name', __('Created by'));
        $grid->column('updatedUser.name', __('Updated by'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        $grid->disableExport();
        $grid->disableFilter();
        $grid->disableRowSelector();

        return $grid;
    }

    protected function detail($id)
    {
        $show = new Show(PageInfo::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('title', __('Title'));
        $show->field('page_name', __('Page Name'));
        $show->field('image', __('Image'))->image("/uploads/");
        $show->field('description', __('Description'))->unescape();
        $show->field('createdUser.name', __('Created by'));
        $show->field('updatedUser.name', __('Updated by'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    protected function form()
    {
        $form = new Form(new PageInfo());

        $form->image('image', __('Image'));
        $form->text('title', __('Title'));
        $form->select('page_name', __('Page Name'))->options([
            'about_us' => 'about_us',
            'shayekh_detail' => 'shayekh_detail',
            'boyan' => 'boyan',
            'article' => 'article',
            'article_detail' => 'article_detail',
            'books' => 'books',
            'khanka' => 'khanka',
            'khanka_detail' => 'khanka_detail',
            'shobgujari' => 'shobgujari',
            'madrasa' => 'madrasa',
            'madrasa_detail' => 'madrasa_detail',
            'mahfil' => 'mahfil',
            'faq' => 'faq',
            'contact-us' => 'contact-us',
            'donation' => 'donation'
        ]);
        $form->ckeditor('description', __('Description'));
        $form->saving(function (Form $form) {
            if($form->isCreating()){
                $form->model()->created_by = Admin::user()->id;
            }else{
                $form->model()->updated_by = Admin::user()->id;
            }
        });

        $form->saved(function (Form $form) {
            if(!empty($form->model()->logo)){
                $image = public_path('uploads/'.$form->model()->logo);
                if(!empty($image)) Image::make($image)->resize(270, 300)->save();
            }
        });

        return $form;
    }

}
