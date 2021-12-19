<?php
// use App\Http\Controller\Dashboard\UserController;
//use App\Http\Controllers\Dashboard\RoleController;
//use App\Http\Controllers\Dashboard\UserController;

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){
    Route::prefix('dashboard')->middleware('auth',)->name('dashboard.')->group(function() {
        Route::resource('roles', RoleController::class);
        Route::resource('user', UserController::class);
    });
});
