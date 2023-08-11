<?php

namespace App\Admin\Controllers;

use App\Models\Kholafa;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class KholafaController extends AdminController
{
    protected $title = 'Kholafa';

    protected function grid()
    {
        $grid = new Grid(new Kholafa());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('detail', __('Detail'))->display(function ($detail){
            return $detail;
        });
        $grid->column('sohobot_period_start', __('Sohobot period start'));
        $grid->column('sohobot_period_end', __('Sohobot period end'));
        $grid->column('phone', __('Phone'));
        $grid->column('reference', __('Reference'))->display(function ($reference){
            return $reference;
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
        $show = new Show(Kholafa::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('detail', __('Detail'))->unescape();
        $show->field('sohobot_period_start', __('Sohobot period start'));
        $show->field('sohobot_period_end', __('Sohobot period end'));
        $show->field('phone', __('Phone'));
        $show->field('reference', __('Reference'))->unescape();
        $show->field('createdUser.name', __('Created by'));
        $show->field('updatedUser.name', __('Updated by'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));


        return $show;
    }


    protected function form()
    {
        $form = new Form(new Kholafa());

        $form->text('name', __('Name'));
        $form->ckeditor('detail', __('Detail'));
        $form->date('sohobot_period_start', __('Sohobot period start'))->default(date('Y-m-d'));
        $form->date('sohobot_period_end', __('Sohobot period end'))->default(date('Y-m-d'));
        $form->mobile('phone', __('Phone'));
        $form->ckeditor('reference', __('Reference'));

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
