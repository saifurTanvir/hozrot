<?php

namespace App\Admin\Controllers;

use App\Models\Category;
use App\Models\Event;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Image;

class EventController extends AdminController
{

    protected $title = 'Event';

    protected function grid()
    {
        $grid = new Grid(new Event());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('subject', __('Subject'));
        $grid->column('detail', __('Detail'))->display(function ($detail){
            return $detail;
        });
        $grid->column('category', __('Category'));
        $grid->column('subcategory', __('Subcategory'));
        $grid->column('e_start', __('E start'));
        $grid->column('e_end', __('E end'));
        $grid->column('place', __('Place'))->display(function ($place){
            return $place;
        });
        $grid->column('helping_procedure', __('Helping procedure'))->display(function ($helpingProcedure){
            return $helpingProcedure;
        });
        $grid->column('invitation_speech', __('Invitation speech'))->display(function ($invitationSpeech){
            return $invitationSpeech;
        });
        $grid->column('hazrot_speech', __('Hazrot speech'))->display(function ($hazrotSpeech){
            return $hazrotSpeech;
        });
        $grid->column('instruction', __('Instruction'))->display(function ($instruction){
            return $instruction;
        });
        $grid->column('image', __('Image'))->image("/uploads/");
        $grid->column('youtube_link', __('Youtube link'))->display(function ($youtubeLink){
            return ' <iframe src="'.$youtubeLink.'" title="youtube_link"></iframe> ';
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
        $show = new Show(Event::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('subject', __('Subject'));
        $show->field('detail', __('Detail'))->unescape();
        $show->field('category', __('Category'));
        $show->field('subcategory', __('Subcategory'));
        $show->field('e_start', __('E start'));
        $show->field('e_end', __('E end'));
        $show->field('place', __('Place'))->unescape();
        $show->field('helping_procedure', __('Helping procedure'))->unescape();
        $show->field('invitation_speech', __('Invitation speech'))->unescape();
        $show->field('hazrot_speech', __('Hazrot speech'))->unescape();
        $show->field('instruction', __('Instruction'))->unescape();
        $show->field('image', __('Image'))->image("/uploads/");
        $show->field('youtube_link', __('Youtube link'))->unescape()->as(function ($youtubeLink){
            return ' <iframe src="'.$youtubeLink.'" title="youtube_link"></iframe> ';
        });
        $show->field('created_by', __('Created by'));
        $show->field('updated_by', __('Updated by'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    protected function form()
    {
        $form = new Form(new Event());

        $category = Category::pluck('name', 'name');

        $form->text('name', __('Name'));
        $form->text('subject', __('Subject'));
        $form->ckeditor('detail', __('Detail'));
        $form->select('category', __('Category'))->options($category)->load('subcategory', '/admin/category_wise_sub_category');
        $form->select('subcategory', __('Subcategory'));
        $form->date('e_start', __('E start'))->default(date('Y-m-d'));
        $form->date('e_end', __('E end'))->default(date('Y-m-d'));
        $form->ckeditor('place', __('Place'));
        $form->ckeditor('helping_procedure', __('Helping procedure'));
        $form->ckeditor('invitation_speech', __('Invitation speech'));
        $form->ckeditor('hazrot_speech', __('Hazrot speech'));
        $form->ckeditor('instruction', __('Instruction'));
        $form->image('image', __('Image'));
        $form->text('youtube_link', __('Youtube link'));

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
                if(!empty($image)) Image::make($image)->resize(2304, 3456)->save();
            }
        });

        return $form;
    }
}
