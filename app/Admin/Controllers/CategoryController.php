<?php

namespace App\Admin\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class CategoryController extends AdminController
{
    protected $title = 'Category';

    protected function grid()
    {
        $grid = new Grid(new Category());

        $grid->column('id', __('Id'));
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
        $show = new Show(Category::findOrFail($id));

        $show->field('id', __('Id'));
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
        $form = new Form(new Category());

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

    public function subCategory()
    {
        $q = request()->get('q');
        return SubCategory::leftJoin('category', 'category.id' , '=', 'subcategory.category_id')
            ->where('category.name', $q)->pluck('subcategory.name', 'subcategory.name');
    }
}
