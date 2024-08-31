<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\WhyChooseUsController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function() {

    // route-url: admin/dashboard and route-name: admin.dashboard
    Route::get('dashboard', [AdminDashboardController::class,'index'])->name('dashboard');

    /** Profile routes */
    //route-url: admin/profile and route-name: admin.profile
    Route::get('profile', [ProfileController::class,'index'])->name('profile');
    //route-url: admin/profile/update and route-name: admin.profile.update
    Route::put('profile/update', [ProfileController::class, 'updateProfile'])->name('profile.update');
    //route-url: admin/profile/password and route-name: admin.profile.password.update
    Route::put('profile/password', [ProfileController::class, 'updatePassword'])->name('profile.password.update');

    /**Slider Routes **/
    Route::resource('slider',SliderController::class);

    /**Why choose us Routes **/
    Route::put('why-choose-title-update', [WhyChooseUsController::class, 'updateTitle'] ) -> name('why-choose-title.update');
    Route::resource('why-choose-us', WhyChooseUsController::class);

    /** Product Category Routes */
    Route::resource('category', CategoryController::class);

    /** Product Routes */
    Route::resource('product', ProductController::class);
});

