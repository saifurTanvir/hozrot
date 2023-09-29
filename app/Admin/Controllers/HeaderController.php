<?php

namespace App\Admin\Controllers;

use App\Models\Header;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Image;

class HeaderController extends AdminController
{
    protected $title = 'Header';

    protected function grid()
    {
        $grid = new Grid(new Header());

        $grid->column('id', __('Id'));
        $grid->column('logo', __('Logo'))->image("/uploads/");
        $grid->column('name', __('Name'));
        $grid->column('language', __('Language'));
        $grid->column('facebook_page_link', __('Facebook Page'));
        $grid->column('instagram_page_link', __('Instagram Page'));
        $grid->column('youtube_page_link', __('Youtube Page'));
        $grid->column('whatsapp_group_link', __('Whatsapp Group'));
        $grid->column('telegram_group_link', __('Telegram Group'));
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
        $show = new Show(Header::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('logo', __('Logo'))->image("/uploads/");
        $show->field('name', __('Name'));
        $show->field('language', __('Language'));
        $show->field('facebook_page_link', __('Facebook Page'));
        $show->field('instagram_page_link', __('Instagram Page'));
        $show->field('youtube_page_link', __('Youtube Page'));
        $show->field('whatsapp_group_link', __('Whatsapp Group'));
        $show->field('telegram_group_link', __('Telegram Group'));
        $show->field('createdUser.name', __('Created by'));
        $show->field('updatedUser.name', __('Updated by'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));


        return $show;
    }

    protected function form()
    {
        $form = new Form(new Header());

        $form->image('logo', __('Logo'));
        $form->text('name', __('Name'));
        $form->text('language', __('Language'));
        $form->text('facebook_page_link', __('Facebook'));
        $form->text('instagram_page_link', __('Instagram'));
        $form->text('youtube_page_link', __('Youtube'));
        $form->text('whatsapp_group_link', __('Whatsapp Group'));
        $form->text('telegram_group_link', __('Telegram Group'));
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
