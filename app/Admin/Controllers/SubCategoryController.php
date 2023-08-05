<?php

namespace App\Admin\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class SubCategoryController extends AdminController
{
    protected $title = 'SubCategory';

    protected function grid()
    {
        $grid = new Grid(new SubCategory());

        $grid->column('id', __('Id'));
        $grid->column('category_id', __('Category id'));
        $grid->column('name', __('Name'));
        $grid->column('detail', __('Detail'));
        $grid->column('purpose', __('Purpose'));
        $grid->column('created_by', __('Created by'));
        $grid->column('updated_by', __('Updated by'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    protected function detail($id)
    {
        $show = new Show(SubCategory::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('category_id', __('Category id'));
        $show->field('name', __('Name'));
        $show->field('detail', __('Detail'));
        $show->field('purpose', __('Purpose'));
        $show->field('created_by', __('Created by'));
        $show->field('updated_by', __('Updated by'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    protected function form()
    {
        $form = new Form(new SubCategory());

        $categories = Category::pluck('name', 'id');
        $form->select('category_id', __('Category'))->options($categories);
        $form->text('name', __('Name'));
        $form->textarea('detail', __('Detail'));
        $form->text('purpose', __('Purpose'));
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
