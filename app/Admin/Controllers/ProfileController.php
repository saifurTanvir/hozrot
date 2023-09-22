<?php

namespace App\Admin\Controllers;

use App\Models\Profile;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Image;

class ProfileController extends AdminController
{
    protected $title = 'Profile';

    protected function grid()
    {
        $grid = new Grid(new Profile());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('title', __('Title'));
        $grid->column('khedmot', __('Khedmot'))->display(function ($khedmot){
            return $khedmot;
        });
        $grid->column('photo', __('Main Photo'))->image("/uploads/");
        $grid->column('photo_1', __('Photo 1'))->image("/uploads/");
        $grid->column('photo_2', __('Photo 2'))->image("/uploads/");
        $grid->column('photo_3', __('Photo 3'))->image("/uploads/");
        $grid->column('photo_4', __('Photo 4'))->image("/uploads/");
        $grid->column('dob', __('Dob'));
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
        $show = new Show(Profile::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('title', __('Section Title'));
        $show->field('khedmot', __('Khedmot'))->unescape();
        $show->field('dob', __('Dob'));
        $show->field('photo', __('Main Photo'))->image("/uploads/");
        $show->field('photo_1', __('Photo 1'))->image("/uploads/");
        $show->field('photo_2', __('Photo 2'))->image("/uploads/");
        $show->field('photo_3', __('Photo 3'))->image("/uploads/");
        $show->field('photo_4', __('Photo 4'))->image("/uploads/");
        $show->field('photo', __('Main Photo'))->image("/uploads/");
        $show->field('createdUser.name', __('Created by'));
        $show->field('updatedUser.name', __('Updated by'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));


        return $show;
    }

    protected function form()
    {
        $form = new Form(new Profile());

        $form->text('name', __('Name'));
        $form->text('title', __('Section Title'));
        $form->ckeditor('salutation', __('Salutation'));
        $form->ckeditor('khedmot', __('Khedmot'));
        $form->date('dob', __('Dob'))->default(date('Y-m-d'));
        $form->image('photo', __('Main Photo'));
        $form->image('photo_1', __('Photo 1'));
        $form->image('photo_2', __('Photo 2'));
        $form->image('photo_3', __('Photo 3'));
        $form->image('photo_4', __('Photo 4'));
        $form->saving(function (Form $form) {
            if($form->isCreating()){
                $form->model()->created_by = Admin::user()->id;
            }else{
                $form->model()->updated_by = Admin::user()->id;
            }
        });

        $form->saved(function (Form $form) {
            if(!empty($form->model()->photo)){
                $image = public_path('uploads/'.$form->model()->photo);
                if(!empty($image)) Image::make($image)->resize(270, 300)->save();
            }

            if(!empty($form->model()->photo)){
                $image = public_path('uploads/'.$form->model()->photo);
                if(!empty($image)) Image::make($image)->resize(270, 300)->save();
            }

            if(!empty($form->model()->photo)){
                $image = public_path('uploads/'.$form->model()->photo);
                if(!empty($image)) Image::make($image)->resize(270, 300)->save();
            }

            if(!empty($form->model()->photo)){
                $image = public_path('uploads/'.$form->model()->photo);
                if(!empty($image)) Image::make($image)->resize(270, 300)->save();
            }

            if(!empty($form->model()->photo)){
                $image = public_path('uploads/'.$form->model()->photo);
                if(!empty($image)) Image::make($image)->resize(270, 300)->save();
            }
        });

        return $form;
    }


}
