<?php

namespace App\Admin\Controllers;

use App\Models\Notice;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Image;

class NoticeController extends AdminController
{

    protected $title = 'Notice';

    protected function grid()
    {
        $grid = new Grid(new Notice());

        $grid->column('id', __('Id'));
        $grid->column('title', __('Title'));
        $grid->column('detail', __('Detail'))->display(function ($detail){
            return $detail;
        });
        $grid->column('period_start', __('Period start'));
        $grid->column('period_end', __('Period end'));
        $grid->column('importance', __('Importance'))->display(function ($importance){
            return $importance;
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
        $show = new Show(Notice::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('title', __('Title'));
        $show->field('detail', __('Detail'))-unescape();
        $show->field('period_start', __('Period start'));
        $show->field('period_end', __('Period end'));
        $show->field('importance', __('Importance'))->unescape();
        $show->field('createdUser.name', __('Created by'));
        $show->field('updatedUser.name', __('Updated by'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));


        return $show;
    }

    protected function form()
    {
        $form = new Form(new Notice());

        $form->text('title', __('Title'));
        $form->ckeditor('detail', __('Detail'));
        $form->date('period_start', __('Period start'))->default(date('Y-m-d'));
        $form->date('period_end', __('Period end'))->default(date('Y-m-d'));
        $form->number('importance', __('Importance'));

        $form->saving(function (Form $form) {
            if($form->isCreating()){
                $form->model()->created_by = Admin::user()->id;
            }else{
                $form->model()->updated_by = Admin::user()->id;
            }
        });

        return $form;
    }
}
