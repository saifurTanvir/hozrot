<?php

namespace App\Admin\Controllers;

use App\Models\Profile;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ProfileController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Profile';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Profile());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('family', __('Family'))->display(function ($family){
            return $family;
        });
        $grid->column('invitation_procedure', __('Invitation procedure'))->display(function ($invitationProcedure){
            return $invitationProcedure;
        });
        $grid->column('dob', __('Dob'));
        $grid->column('communication_procedure', __('Communication procedure'))->display(function ($communicationProcedure){
            return $communicationProcedure;
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

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Profile::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('family', __('Family'))->unescape();
        $show->field('invitation_procedure', __('Invitation procedure'))->unescape();
        $show->field('dob', __('Dob'));
        $show->field('communication_procedure', __('Communication procedure'))->unescape();
        $show->field('createdUser.name', __('Created by'));
        $show->field('updatedUser.name', __('Updated by'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));


        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Profile());

        $form->text('name', __('Name'));
        $form->ckeditor('family', __('Family'));
        $form->ckeditor('invitation_procedure', __('Invitation procedure'));
        $form->date('dob', __('Dob'))->default(date('Y-m-d'));
        $form->ckeditor('communication_procedure', __('Communication procedure'));

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
