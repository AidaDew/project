<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', 'FirstController@index' );

Route::get('/about_the_institution', function () {
    return 'Об учреждении';
});

Route::get('/services', function () {
    return 'Услуги';
});

Route::get('/specialists', function () {
    return 'Специалисты';
});

Route::get('/patients', function () {
    return 'Пациентам';
});

Route::get('/contacts', function () {
    return 'Контакты';
});

