<?php

namespace App\Admin\Controllers;

use App\Models\Audio;
use App\Models\Category;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Image;

class AudioController extends AdminController
{
    protected $title = 'Audio';

    protected function grid()
    {
        $grid = new Grid(new Audio());

        $grid->column('id', __('Id'));
        $grid->column('youtube_link', __('Youtube link'))->display(function ($youtubeLink){
            return ' <iframe src="'.$youtubeLink.'" title="description"></iframe> ';
        });
        $grid->column('title', __('Title'));
        $grid->column('description', __('Description'))->display(function ($description){
            return $description;
        });
        $grid->column('thumpnail_img', __('Thumpnail img'))->image("/uploads/");
        $grid->column('category', __('Category'));
        $grid->column('subcatefory', __('Subcatefory'));
        $grid->column('place', __('Place'));
        $grid->column('subject', __('Subject'));
        $grid->column('quranul_karim_ref', __('Quranul karim ref'))->display(function ($quranul_karim_ref){
            return $quranul_karim_ref;
        });
        $grid->column('hadis_sharif_ref', __('Hadis sharif ref'))->display(function ($hadis_sharif_ref){
            return $hadis_sharif_ref;
        });
        $grid->column('sher_asars', __('Sher asars'))->display(function ($sher_asars){
            return $sher_asars;
        });
        $grid->column('khutbah', __('Khutbah'))->display(function ($khutbah){
            return $khutbah;
        });
        $grid->column('hazrots_comments', __('Hazrots comments'))->display(function ($hazrots_comments){
            return $hazrots_comments;
        });
        $grid->column('learning', __('Learning'))->display(function ($learning){
            return $learning;
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
        $show = new Show(Audio::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('youtube_link', __('Youtube link'))->unescape()->as(function ($youtubeLink){
            return ' <iframe src="'.$youtubeLink.'" title="description"></iframe> ';
        });
        $show->field('title', __('Title'));
        $show->field('description', __('Description'))->unescape();
        $show->field('thumpnail_img', __('Thumpnail img'))->image("/uploads/");
        $show->field('category', __('Category'));
        $show->field('subcatefory', __('Subcatefory'));
        $show->field('place', __('Place'));
        $show->field('subject', __('Subject'));
        $show->field('quranul_karim_ref', __('Quranul karim ref'))->unescape();
        $show->field('hadis_sharif_ref', __('Hadis sharif ref'))->unescape();
        $show->field('sher_asars', __('Sher asars'))->unescape();
        $show->field('khutbah', __('Khutbah'))->unescape();
        $show->field('hazrots_comments', __('Hazrots comments'))->unescape();
        $show->field('learning', __('Learning'))->unescape();
        $show->field('createdUser.name', __('Created by'));
        $show->field('updatedUser.name', __('Updated by'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    protected function form()
    {
        $form = new Form(new Audio());

        $category = Category::pluck('name', 'name');

        $form->url('youtube_link', __('Youtube link'));
        $form->text('title', __('Title'));
        $form->ckeditor('description', __('Description'));
        $form->image('thumpnail_img', __('Thumbnail'));
        $form->select('category', __('Category'))->options($category)->load('subcatefory', '/admin/category_wise_sub_category');
        $form->select('subcatefory', __('Subcatefory'));
        $form->text('place', __('Place'));
        $form->text('subject', __('Subject'));
        $form->ckeditor('quranul_karim_ref', __('Quranul karim ref'));
        $form->ckeditor('hadis_sharif_ref', __('Hadis sharif ref'));
        $form->ckeditor('sher_asars', __('Sher asars'));
        $form->ckeditor('khutbah', __('Khutbah'));
        $form->ckeditor('hazrots_comments', __('Hazrots comments'));
        $form->ckeditor('learning', __('Learning'));

        $form->saving(function (Form $form) {
            if($form->isCreating()){
                $form->model()->created_by = Admin::user()->id;
            }else{
                $form->model()->updated_by = Admin::user()->id;
            }
        });

        $form->saved(function (Form $form) {
            if(!empty($form->model()->image)){
                $image = public_path('uploads/'.$form->model()->image);
                if(!empty($image)) Image::make($image)->resize(1280, 720)->save();
            }
        });

        return $form;
    }




}
