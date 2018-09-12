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

Route::middleware(['web'])
    ->namespace('Web')
    ->group(function () {
        Route::get('/', function () {
            return redirect()->route('web.staffs.index');
        });
        //Route for StaffsController
        Route::resource('staffs', 'StaffsController', ['names' => [
            'index' => 'web.staffs.index',
            'create' => 'web.staffs.create',
            'store' => 'web.staffs.store',
            'show' => 'web.staffs.show',
            'edit' => 'web.staffs.edit',
            'update' => 'web.staffs.update',
            'destroy' => 'web.staffs.destroy',
        ]]);
        //Other Router
        //.....

    });
