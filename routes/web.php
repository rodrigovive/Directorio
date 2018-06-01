<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', function () {
    return view('welcome');
});


Route::group(['namespace' => 'Backend', 'prefix' => 'admin', 'as' => 'backend.', 'middleware' => 'auth'], function () {

    Route::resource(
        '/',
        'DashboardController',
        [
            'names' =>
                [
                    'index' => 'dashboard.index',
                ]
        ]
    );

    Route::resource(
        '/dependencias',
        'Dependence\DependenceController',
        [
            'names' =>
                [
                    'store' => 'dependence.build',
                    'index' => 'dependence.index',
                ]
        ]
    );

    Route::resource(
        '/personal',
        'Manager\ManagerController',
        [
            'names' =>
                [
                    'store' => 'manager.build',
                    'index' => 'manager.index',
                ]
        ]
    );

    Route::resource(
        '/tipos',
        'Dependence\CategoryDependenceController',
        [
            'names' =>
                [
                    'store' => 'category.build',
                    'index' => 'category.index',
                ]
        ]
    );


});


$this->get('admin/login', 'Auth\LoginController@showLoginForm')->name('login');

$this->post('admin/login', 'Auth\LoginController@login');

$this->get('admin/logout', 'Auth\LoginController@logout')->name('logout');

Route::group(['namespace' => 'Frontend', 'as' => 'frontend.'], function () {

    Route::get('/', 'IndexController@index')->name('index');

    Route::get('/personal', 'Manager\ManagerController@ManagerApi')->name('manager');

});

Route::group(['namespace' => 'Backend', 'as' => 'api.', 'prefix' => 'api'], function () {

    Route::group(['as' => 'dependence.', 'prefix' => 'dependence', 'namespace' => 'Dependence'], function () {

        Route::get('all', 'ApiDependenceController@all')->name('all');

    });

    Route::get('/', 'IndexController@index')->name('index');

    Route::get('/personal', 'Manager\ManagerController@ManagerApi')->name('manager');

});
