<?php

namespace App\Admin\Controllers;

use App\Models\Footer;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Image;

class FooterController extends AdminController
{
    protected $title = 'Footer';

    protected function grid()
    {
        $grid = new Grid(new Footer());

        $grid->column('id', __('Id'));
        $grid->column('logo', __('Logo'))->image("/uploads/");
        $grid->column('detail', __('Text'))->display(function ($detail){
            return $detail;
        });
        $grid->column('phone', __('Phone'));
        $grid->column('email', __('Email'));
        $grid->column('address', __('Address'));
        $grid->column('copyright_name', __('Copyright Name'));
        $grid->column('copyright_year', __('Copyright Year'));
        $grid->column('facebook_page', __('Facebook Page'));
        $grid->column('youtube_page', __('Youtube Page'));
        $grid->column('instagram_page', __('Instagram Page'));
        $grid->column('whatsapp_group_link', __('Whatsapp Group'));
        $grid->column('telegram_group_link', __('Telegram Group'));
        $grid->column('follow_us_image_1', __('Follow Us Image 1'))->image("/uploads/");
        $grid->column('follow_us_image_2', __('Follow Us Image 2'))->image("/uploads/");
        $grid->column('follow_us_image_3', __('Follow Us Image 3'))->image("/uploads/");

        $grid->disableExport();
        $grid->disableFilter();
        $grid->disableRowSelector();

        return $grid;
    }

    protected function detail($id)
    {
        $show = new Show(Footer::findOrFail($id));

        $show->field('logo', __('Logo'))->image("/uploads/");
        $show->field('detail', __('Text'))->unescape();
        $show->field('phone', __('Phone'));
        $show->field('email', __('Email'));
        $show->field('address', __('Address'));
        $show->field('copyright_name', __('Copyright Name'));
        $show->field('copyright_year', __('Copyright Year'));
        $show->field('facebook_page', __('Facebook Page'));
        $show->field('youtube_page', __('Youtube Page'));
        $show->field('instagram_page', __('Instagram Page'));
        $show->field('whatsapp_group_link', __('Whatsapp Group'));
        $show->field('telegram_group_link', __('Telegram Group'));
        $show->field('follow_us_image_1', __('Follow Us Image 1'))->image("/uploads/");
        $show->field('follow_us_image_2', __('Follow Us Image 2'))->image("/uploads/");
        $show->field('follow_us_image_3', __('Follow Us Image 3'))->image("/uploads/");


        return $show;
    }

    protected function form()
    {
        $form = new Form(new Footer());

        $form->image('logo', __('Logo'));
        $form->ckeditor('detail', __('Text'));
        $form->text('phone', __('Phone'));
        $form->text('email', __('Email'));
        $form->text('address', __('Address'));
        $form->text('copyright_name', __('Copyright Name'));
        $form->text('copyright_year', __('Copyright Year'));
        $form->text('facebook_page', __('Facebook Page'));
        $form->text('youtube_page', __('Youtube Page'));
        $form->text('instagram_page', __('Instagram Page'));
        $form->text('whatsapp_group_link', __('Whatsapp Group'));
        $form->text('telegram_group_link', __('Telegram Group'));
        $form->image('follow_us_image_1', __('Follow Us Image 1'));
        $form->image('follow_us_image_2', __('Follow Us Image 2'));
        $form->image('follow_us_image_3', __('Follow Us Image 3'));
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
