<?php

use Illuminate\Http\Request;

Route::post('user/register', 'APIRegisterController@register');
Route::post('user/login', 'APILoginController@login');


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
