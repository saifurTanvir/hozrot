<?php

namespace App\Admin\Controllers;

use App\Models\Book;
use App\Models\Category;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Image;

class BookController extends AdminController
{
    protected $title = 'Book';

    protected function grid()
    {
        $grid = new Grid(new Book());

        $grid->column('id', __('Id'));
        $grid->column('title', __('Title'));
        $grid->column('description', __('Description'))->display(function ($description){
            return $description;
        });
        $grid->column('writer_name', __('Writer name'));
        $grid->column('writer_detail', __('Writer detail'))->display(function ($detail){
            return $detail;
        });
        $grid->column('content_link', __('Content link'))->downloadable("/uploads/");
        $grid->column('thumbnail_img', __('Thumbnail img'))->image("/uploads/");
        $grid->column('category', __('Category'));
        $grid->column('subcategory', __('Subcategory'));
        $grid->column('place', __('Place'));
        $grid->column('summary', __('Summary'))->display(function ($summary){
            return $summary;
        });
        $grid->column('attention', __('Attention'))->display(function ($attention){
            return $attention;
        });
        $grid->column('others_comment', __('Others comment'))->display(function ($othersComment){
            return $othersComment;
        });
        $grid->column('hozrot_speech', __('Hozrot speech'))->display(function ($hozrotSpeech){
            return $hozrotSpeech;
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
        $show = new Show(Book::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('title', __('Title'));
        $show->field('description', __('Description'))->unescape();
        $show->field('writer_name', __('Writer name'));
        $show->field('writer_detail', __('Writer detail'))->unescape();
        $show->field('content_link', __('Content link'))->file("/uploads/");
        $show->field('thumbnail_img', __('Thumbnail img'))->image("/uploads/");
        $show->field('category', __('Category'));
        $show->field('subcategory', __('Subcategory'));
        $show->field('place', __('Place'));
        $show->field('summary', __('Summary'))->unescape();
        $show->field('attention', __('Attention'))->unescape();
        $show->field('others_comment', __('Others comment'))->unescape();
        $show->field('hozrot_speech', __('Hozrot speech'))->unescape();
        $show->field('createdUser.name', __('Created by'));
        $show->field('updatedUser.name', __('Updated by'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));


        return $show;
    }

    protected function form()
    {
        $form = new Form(new Book());

        $category = Category::pluck('name', 'name');

        $form->text('title', __('Title'));
        $form->ckeditor('description', __('Description'));
        $form->text('writer_name', __('Writer name'));
        $form->ckeditor('writer_detail', __('Writer detail'));
        $form->file('content_link', __('Content link'));
        $form->image('thumbnail_img', __('Thumbnail img'));
        $form->select('category', __('Category'))->options($category)->load('subcategory', '/admin/category_wise_sub_category');
        $form->select('subcategory', __('Subcategory'));
        $form->text('place', __('Place'));
        $form->ckeditor('summary', __('Summary'));
        $form->ckeditor('attention', __('Attention'));
        $form->ckeditor('others_comment', __('Others comment'));
        $form->ckeditor('hozrot_speech', __('Hozrot speech'));

        $form->saving(function (Form $form) {
            if($form->isCreating()){
                $form->model()->created_by = Admin::user()->id;
            }else{
                $form->model()->updated_by = Admin::user()->id;
            }
        });

        $form->saved(function (Form $form) {
            if(!empty($form->model()->thumbnail_img)){
                $image = public_path('uploads/'.$form->model()->thumbnail_img);
                if(!empty($image)) Image::make($image)->resize(1280, 720)->save();
            }
        });

        return $form;
    }
}
