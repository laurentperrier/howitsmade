<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('stripe', 'PagesController@stripe');
