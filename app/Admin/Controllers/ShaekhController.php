<?php

namespace App\Admin\Controllers;

use App\Models\Shaekh;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Image;

class ShaekhController extends AdminController
{
    protected $title = 'Shaekh';

    protected function grid()
    {
        $grid = new Grid(new Shaekh());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('detail', __('Detail'))->display(function ($detail){
            return $detail;
        });
        $grid->column('story', __('Story'))->display(function ($story){
            return $story;
        });
        $grid->column('period_start', __('Period start'));
        $grid->column('period_end', __('Period end'));
        $grid->column('certificate_story', __('Certificate story'))->display(function ($certificateStory){
            return $certificateStory;
        });
        $grid->column('certificate_url', __('Certificate url'))->image("/uploads/");
        $grid->column('impact', __('Impact'))->display(function ($impact){
            return $impact;
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
        $show = new Show(Shaekh::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('detail', __('Detail'))->unescape();
        $show->field('story', __('Story'))->unescape();
        $show->field('period_start', __('Period start'));
        $show->field('period_end', __('Period end'));
        $show->field('certificate_story', __('Certificate story'))->unescape();
        $show->field('certificate_url', __('Certificate url'))->image("/uploads/");
        $show->field('impact', __('Impact'))->unescape();
        $show->field('createdUser.name', __('Created by'));
        $show->field('updatedUser.name', __('Updated by'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    protected function form()
    {
        $form = new Form(new Shaekh());

        $form->text('name', __('Name'));
        $form->ckeditor('detail', __('Detail'));
        $form->ckeditor('story', __('Story'));
        $form->date('period_start', __('Period start'))->default(date('Y-m-d'));
        $form->date('period_end', __('Period end'))->default(date('Y-m-d'));
        $form->ckeditor('certificate_story', __('Certificate story'));
        $form->image('certificate_url', __('Certificate url'));
        $form->ckeditor('impact', __('Impact'));

        $form->saving(function (Form $form) {
            if($form->isCreating()){
                $form->model()->created_by = Admin::user()->id;
            }else{
                $form->model()->updated_by = Admin::user()->id;
            }
        });

        $form->saved(function (Form $form) {
            if(!empty($form->model()->certificate_url)){
                $image = public_path('uploads/'.$form->model()->certificate_url);
                if(!empty($image)) Image::make($image)->resize(2304, 3456)->save();
            }
        });

        return $form;
    }
}
