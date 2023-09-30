<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\PageInfo;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades;
use Illuminate\View\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Facades\View::composer(['frontend.template', 'frontend.common_template'], function (View $view) {
            $view->with('categories', Category::select('name')->get());
        });

        Facades\View::composer(['frontend.about_us'], function (View $view) {
            $view->with('pageInfo', PageInfo::select('title', 'description', 'image')->where('page_name', 'about_us')->first());
        });

        Facades\View::composer(['frontend.shaekh_detail'], function (View $view) {
            $view->with('pageInfo', PageInfo::select('title', 'description', 'image')->where('page_name', 'shayekh_detail')->first());
        });

        Facades\View::composer(['frontend.boyan'], function (View $view) {
            $view->with('pageInfo', PageInfo::select('title', 'description', 'image')->where('page_name', 'boyan')->first());
        });

        Facades\View::composer(['frontend.article'], function (View $view) {
            $view->with('pageInfo', PageInfo::select('title', 'description', 'image')->where('page_name', 'article')->first());
        });

        Facades\View::composer(['frontend.article_detail'], function (View $view) {
            $view->with('pageInfo', PageInfo::select('title', 'description', 'image')->where('page_name', 'article_detail')->first());
        });

        Facades\View::composer(['frontend.books'], function (View $view) {
            $view->with('pageInfo', PageInfo::select('title', 'description', 'image')->where('page_name', 'books')->first());
        });

        Facades\View::composer(['frontend.khanka'], function (View $view) {
            $view->with('pageInfo', PageInfo::select('title', 'description', 'image')->where('page_name', 'khanka')->first());
        });

        Facades\View::composer(['frontend.khanka_detail'], function (View $view) {
            $view->with('pageInfo', PageInfo::select('title', 'description', 'image')->where('page_name', 'khanka_detail')->first());
        });

        Facades\View::composer(['frontend.shobgujari'], function (View $view) {
            $view->with('pageInfo', PageInfo::select('title', 'description', 'image')->where('page_name', 'shobgujari')->first());
        });

        Facades\View::composer(['frontend.madrasa'], function (View $view) {
            $view->with('pageInfo', PageInfo::select('title', 'description', 'image')->where('page_name', 'madrasa')->first());
        });

        Facades\View::composer(['frontend.madrasa_detail'], function (View $view) {
            $view->with('pageInfo', PageInfo::select('title', 'description', 'image')->where('page_name', 'madrasa_detail')->first());
        });

        Facades\View::composer(['frontend.mahfil'], function (View $view) {
            $view->with('pageInfo', PageInfo::select('title', 'description', 'image')->where('page_name', 'mahfil')->first());
        });

        Facades\View::composer(['frontend.faq'], function (View $view) {
            $view->with('pageInfo', PageInfo::select('title', 'description', 'image')->where('page_name', 'faq')->first());
        });

        Facades\View::composer(['frontend.contact-us'], function (View $view) {
            $view->with('pageInfo', PageInfo::select('title', 'description', 'image')->where('page_name', 'contact-us')->first());
        });

        Facades\View::composer(['frontend.donation'], function (View $view) {
            $view->with('pageInfo', PageInfo::select('title', 'description', 'image')->where('page_name', 'donation')->first());
        });
    }
}
