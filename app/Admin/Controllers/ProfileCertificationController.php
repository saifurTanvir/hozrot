<?php

namespace App\Admin\Controllers;

use App\Models\ProfileCertification;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Image;

class ProfileCertificationController extends AdminController
{
    protected $title = 'ProfileCertification';

    protected function grid()
    {
        $grid = new Grid(new ProfileCertification());

        $grid->column('id', __('Id'));
        $grid->column('c_name', __('C name'));
        $grid->column('c_where', __('C where'))->display(function ($detail){
            return $detail;
        });
        $grid->column('c_acheivement', __('C acheivement'))->display(function ($cAcheivement){
            return $cAcheivement;
        });
        $grid->column('certificate_url', __('Certificate url'))->image("/uploads/");
        $grid->column('c_connecting_people', __('Connecting peoples'))->display(function ($cConnectingPeople){
            return $cConnectingPeople;
        });
        $grid->column('c_impact', __('Impact'))->display(function ($cImpact){
            return $cImpact;
        });
        $grid->column('c_starting_date', __('Starting date'));
        $grid->column('c_ending_date', __('Ending date'));
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
        $show = new Show(ProfileCertification::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('c_name', __('C name'));
        $show->field('c_where', __('C where'))->unescape();
        $show->field('c_acheivement', __('Acheivement'))->unescape();
        $show->field('certificate_url', __('Certificate url'))->image("/uploads/");
        $show->field('c_connecting_people', __('Connecting people'))->unescape();
        $show->field('c_impact', __('Impact'))->unescape();
        $show->field('c_starting_date', __('Starting date'));
        $show->field('c_ending_date', __('Ending date'));
        $show->field('createdUser.name', __('Created by'));
        $show->field('updatedUser.name', __('Updated by'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));


        return $show;
    }

    protected function form()
    {
        $form = new Form(new ProfileCertification());

        $form->text('c_name', __('Name'));
        $form->ckeditor('c_where', __('Where'));
        $form->ckeditor('c_acheivement', __('Acheivement'));
        $form->image('certificate_url', __('Certificate url'));
        $form->ckeditor('c_connecting_people', __('Connecting people'));
        $form->ckeditor('c_impact', __('C impact'));
        $form->date('c_starting_date', __('Starting date'))->default(date('Y-m-d'));
        $form->date('c_ending_date', __('C ending date'))->default(date('Y-m-d'));

        $form->saving(function (Form $form) {
            if($form->isCreating()){
                $form->model()->created_by = Admin::user()->id;
            }else{
                $form->model()->updated_by = Admin::user()->id;
            }
        });

        $form->saved(function (Form $form) {
            if(!empty($form->model()->certificate_url)){
                $image = public_path('uploads/'.$form->model()->certificate_url);
                if(!empty($image)) Image::make($image)->resize(2304, 3456)->save();
            }
        });

        return $form;
    }
}
