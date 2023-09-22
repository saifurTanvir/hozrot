<?php

namespace App\Admin\Controllers;

use App\Models\ProfileFamily;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ProfileFamilyController extends AdminController
{
    protected $title = 'Profile Family';

    protected function grid()
    {
        $grid = new Grid(new ProfileFamily());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('detail', __('Short Detail'))->display(function ($detail){
            return $detail;
        });
        $grid->column('period_start', __('Date of Birth'));
        $grid->column('period_end', __('Date of Death'));
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
        $show = new Show(ProfileFamily::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('detail', __('Short Detail'))->unescape();
        $show->field('period_start', __('Date of Birth'));
        $show->field('period_end', __('Date of Death'));
        $show->field('createdUser.name', __('Created by'));
        $show->field('updatedUser.name', __('Updated by'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));


        return $show;
    }

    protected function form()
    {
        $form = new Form(new ProfileFamily());

        $form->text('name', __('Name'));
        $form->ckeditor('detail', __('Short Detail'));
        $form->date('period_start', __('Date of Birth'))->default(date('Y-m-d'));
        $form->date('period_end', __('Date of Death'))->default(date('Y-m-d'));

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
