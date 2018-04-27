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

Route::prefix('/admin')->group(function(){
    
    Route::resource(
        '/',
        'Backend\DashboardController',
        [
            'names' =>
                [
                'index' => 'dashboard.index',
            ]
        ]
    );

    Route::resource(
        '/dependencias',
        'Backend\Dependence\DependenceController',
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
        'Backend\Manager\ManagerController',
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
        'Backend\Dependence\CategoryDependenceController',
        [
            'names' =>
                [
                    'store' => 'category.build',
                    'index' => 'category.index',
                ]
        ]
    );


});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
