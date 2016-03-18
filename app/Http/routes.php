<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/home', 'HomeController@index');
    Route::get('/queue', function() {
        return view('auth.request_in_queue');
    });
    Route::group(['middleware' => 'auth'], function () {
        Route::group(['prefix' => 'student'], function() {

        });
        Route::group(['prefix' => 'teacher'], function() {

        });
        Route::group(['prefix' => 'administrator'], function() {
            Route::get('/', [
                'as'    => 'administrator.index',
                'uses'  => 'AdministratorController@index',
            ]);
            Route::get('users', [
                'as'    => 'administrator.users',
                'uses'  => 'AdministratorController@users',
            ]);

            Route::group(['prefix' => 'users'], function() {
                Route::get('/', [
                    'as'    => 'administrator.users',
                    'uses'  => 'AdministratorController@users',
                ]);

                Route::get('create', [
                    'as'    => 'administrator.users.create',
                    'uses'  => 'UserController@create',
                ]);

                Route::post('create', [
                    'as'    => 'administrator.users.create',
                    'uses'  => 'UserController@create',
                ]);
                Route::get('{id}/delete', [
                    'as'    => 'administrator.users.delete',
                    'uses'  => 'UserController@delete',
                ]);
                Route::get('{id}/edit', [
                    'as'    => 'administrator.users.edit',
                    'uses'  => 'UserController@edit',
                ]);
                Route::post('{id}/edit', [
                    'as'    => 'administrator.users.edit',
                    'uses'  => 'UserController@edit',
                ]);
                Route::get('{id}/activate', [
                    'as'    => 'administrator.users.activate',
                    'uses'  => 'UserController@activate',
                ]);
            });

            Route::group(['prefix' => 'groups'], function() {
                Route::get('/', [
                    'as'    => 'administrator.groups',
                    'uses'  => 'AdministratorController@groups',
                ]);

                Route::get('create', [
                    'as'    => 'administrator.groups.create',
                    'uses'  => 'GroupsController@create',
                ]);

                Route::post('create', [
                    'as'    => 'administrator.groups.create',
                    'uses'  => 'GroupsController@create',
                ]);

                /*
                Route::get('view', [
                    'as'    => 'administrator.groups',
                    'uses'  => 'GroupsController@groups',
                ]);
                */
                Route::get('{id}/show', [
                    'as'    => 'administrator.groups.show',
                    'uses'  => 'GroupsController@show',
                ]);
                Route::post('{id}/edit', [
                    'as'    => 'administrator.groups.edit',
                    'uses'  => 'GroupsController@edit',
                ]);
                Route::get('{id}/delete', [
                    'as'    => 'administrator.groups.delete',
                    'uses'  => 'GroupsController@delete',
                ]);
            });

            Route::group(['prefix' => 'roles'], function() {
                Route::get('/', [
                    'as'    => 'administrator.roles',
                    'uses'  => 'RolesController@index',
                ]);
                Route::get('{id}/view', [
                    'as'    => 'administrator.roles.view',
                    'uses'  => 'RolesController@show',
                ]);
                Route::post('store', [
                    'as'    => 'administrator.roles.store',
                    'uses'  => 'RolesController@store',
                ]);
            });

            Route::group(['prefix' => 'logs'], function() {
                Route::get('/', [
                    'as'    => 'administrator.logs',
                    'uses'  => 'LogsController@index',
                ]);
            });

            Route::get('settings', [
                'as'    => 'administrator.settings',
                'uses'  => 'AdministratorController@settings',
            ]);

            Route::get('tmp', 'AdministratorController@tmp');
        });

        Route::group(['prefix' => 'tech'], function() {
            // Last in line
        });
    });
});