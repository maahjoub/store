<?php

Route::prefix('dashboard')->name('dashboard.')->group(function() {
	Route::get('', function(){
		return view('dashboard.index');
	});
});
