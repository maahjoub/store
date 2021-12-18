<?php
// use App\Http\Controller\Dashboard\UserController;


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){
    Route::prefix('dashboard')->name('dashboard.')->group(function() {
        Route::resource('user', UserController::class);
    });
});
