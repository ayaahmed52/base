<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::group([
    'as'         => 'admin.',
  ], function () {

    Route::get('login', 'AuthController@getLogin')->name('get_login');
    Route::post('post-login', 'AuthController@postLogin')->name('post_login');

    Route::get('Home', [
        'uses'      => 'HomeController@index',
        'as'        => 'home',
        'icon'      => '<i class="feather icon-home"></i>',
        'title'     => 'الرئيسية',
        'type'      => 'parent',
        'child'     =>  [],
    ]);

  });