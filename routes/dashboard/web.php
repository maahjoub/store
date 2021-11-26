<?php
// use App\Http\Controller\Dashboard\UserController;
Route::prefix('dashboard')->name('dashboard.')->group(function() {
	Route::resource('user', UserController::class);
});
