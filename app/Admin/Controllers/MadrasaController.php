<?php

namespace App\Admin\Controllers;

use App\Models\Madrasa;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Image;

class MadrasaController extends AdminController
{
    protected $title = 'Madrasa';

    protected function grid()
    {
        $grid = new Grid(new Madrasa());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('images', __('Images'))->image("/uploads/");
        $grid->column('address', __('Address'))->display(function ($address){
            return $address;
        });
        $grid->column('information', __('Information'))->display(function ($information){
            return $information;
        });
        $grid->column('aim', __('Aim'))->display(function ($aim){
            return $aim;
        });
        $grid->column('service', __('Service'))->display(function ($service){
            return $service;
        });
        $grid->column('philosophy', __('Philosophy'))->display(function ($philosophy){
            return $philosophy;
        });
        $grid->column('acheivements', __('Acheivements'))->display(function ($acheivements){
            return $acheivements;
        });
        $grid->column('academic_calender_url', __('Academic calender url'))->image("/uploads/");
        $grid->column('helping_procedure', __('Helping procedure'))->display(function ($helpingProcedure){
            return $helpingProcedure;
        });
        $grid->column('othes', __('Othes'))->display(function ($othes){
            return $othes;
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
        $show = new Show(Madrasa::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('images', __('Images'))->image("/uploads/");
        $show->field('address', __('Address'))->unescape();
        $show->field('information', __('Information'))->unescape();
        $show->field('aim', __('Aim'))->unescape();
        $show->field('service', __('Service'))->unescape();
        $show->field('philosophy', __('Philosophy'))->unescape();
        $show->field('acheivements', __('Acheivements'))->unescape();
        $show->field('academic_calender_url', __('Academic calender url'))->image("/uploads/");
        $show->field('helping_procedure', __('Helping procedure'))->unescape();
        $show->field('othes', __('Othes'))->unescape();
        $show->field('createdUser.name', __('Created by'));
        $show->field('updatedUser.name', __('Updated by'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    protected function form()
    {
        $form = new Form(new Madrasa());

        $form->text('name', __('Name'));
        $form->image('images', __('Images'));
        $form->ckeditor('address', __('Address'));
        $form->ckeditor('information', __('Information'));
        $form->ckeditor('aim', __('Aim'));
        $form->ckeditor('service', __('Service'));
        $form->ckeditor('philosophy', __('Philosophy'));
        $form->ckeditor('acheivements', __('Acheivements'));
        $form->image('academic_calender_url', __('Academic calender url'));
        $form->ckeditor('helping_procedure', __('Helping procedure'));
        $form->ckeditor('othes', __('Othes'));

        $form->saving(function (Form $form) {
            if($form->isCreating()){
                $form->model()->created_by = Admin::user()->id;
            }else{
                $form->model()->updated_by = Admin::user()->id;
            }
        });

        $form->saved(function (Form $form) {
            if(!empty($form->model()->images)){
                $image = public_path('uploads/'.$form->model()->images);
                if(!empty($image)) Image::make($image)->resize(2304, 3456)->save();
            }

            if(!empty($form->model()->academic_calender_url)){
                $image = public_path('uploads/'.$form->model()->academic_calender_url);
                if(!empty($image)) Image::make($image)->resize(2304, 3456)->save();
            }
        });

        return $form;
    }
}
