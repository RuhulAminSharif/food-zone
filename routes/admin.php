<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\SliderController;
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
});

