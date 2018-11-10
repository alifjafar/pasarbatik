<?php

Route::get('/', 'HomeController@index')->name('homepage');


/* Auth Routes */
Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('/register', 'Auth\RegisterController@register');
Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\LoginController@login');


Route::group(['middleware' => ['auth']], function () {
    Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

    Route::get('partner/register', 'PartnerRegisterController@create')->name('register-partner');
    Route::post('partner', 'PartnerRegisterController@partnerRegister')->name('partner.register');

    Route::group(['prefix' => 'user'], function () {
        Route::get('/{username}', 'ProfileController@index')->name('profile');
        Route::get('/{username}/edit', 'ProfileController@edit')->name('edit-profile');
        Route::get('/{username}/change_password', 'ProfileController@editPassword')->name('edit-password');
        Route::put('/edit/{profile}','ProfileController@updateProfile')->name('update.profile');
        Route::put('/change_password/{user}','ProfileController@updatePassword')->name('update.password');
    });

    Route::resource('products', 'ProductController');
    Route::resource('categories', 'CategoryController');

    Route::post('upload-image','ProductController@uploadImage')->name('upload.image');
    Route::delete('delete-image/{id}', 'ProductController@deleteImage')->name('delete.image');
});


Route::get('/payment/invoices', function () {
    return view('budayaku.user.services.riwayat-pemesanan');
})->name('booking-list');

Route::get('/daftarproduk', function () {
    return view('pasarbatik.daftarproduk');
});