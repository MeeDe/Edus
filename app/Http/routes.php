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

    //Route::get('/home', 'HomeController@index');

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

            Route::group(['prefix' => 'users'], function() {
                Route::get('/', [
                    'as'    => 'administrator.users.index',
                    'uses'  => 'UserController@index',
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
                Route::get('{id}/deactivate', [
                    'as'    => 'administrator.users.deactivate',
                    'uses'  => 'UserController@deactivate',
                ]);
            });

            Route::group(['prefix' => 'groups'], function() {
                Route::get('/', [
                    'as'    => 'administrator.groups.index',
                    'uses'  => 'GroupsController@index',
                ]);
                Route::get('create', [
                    'as'    => 'administrator.groups.create',
                    'uses'  => 'GroupsController@create',
                ]);
                Route::post('store', [
                    'as'    => 'administrator.groups.store',
                    'uses'  => 'GroupsController@store',
                ]);
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
                    'as'    => 'administrator.roles.index',
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
                Route::get('{id}/delete', [
                    'as'    => 'administrator.roles.delete',
                    'uses'  => 'RolesController@delete',
                ]);
            });

            Route::group(['prefix' => 'privileges'], function() {
                Route::get('/', [
                    'as'    => 'administrator.privileges.index',
                    'uses'  => 'PrivilegesController@index',
                ]);
                Route::get('{id}/view', [
                    'as'    => 'administrator.privileges.view',
                    'uses'  => 'PrivilegesController@show',
                ]);
                Route::post('store', [
                    'as'    => 'administrator.privileges.store',
                    'uses'  => 'PrivilegesController@store',
                ]);
                Route::get('{id}/delete', [
                    'as'    => 'administrator.privileges.delete',
                    'uses'  => 'PrivilegesController@delete',
                ]);
            });

            Route::group(['prefix' => 'system'], function() {
                Route::get('/', [
                    'as'    => 'administrator.system.index',
                    'uses'  => 'SystemController@index',
                ]);
                Route::group(['prefix' => 'data'], function() {
                    Route::group(['prefix' => 'export'], function() {
                        Route::get('csv', [
                            'as'    => 'administrator.system.data.export.csv',
                            'uses'  => 'SystemController@csv',
                        ]);
                        Route::get('pdf', [
                            'as'    => 'administrator.system.data.export.pdf',
                            'uses'  => 'SystemController@pdf',
                        ]);
                        Route::get('sql', [
                            'as'    => 'administrator.system.data.export.sql',
                            'uses'  => 'SystemController@sql',
                        ]);
                        Route::get('xml', [
                            'as'    => 'administrator.system.data.export.xml',
                            'uses'  => 'SystemController@xml',
                        ]);
                        Route::get('json', [
                            'as'    => 'administrator.system.data.export.json',
                            'uses'  => 'SystemController@json',
                        ]);
                    });
                });
            });
            Route::group(['prefix' => 'logs'], function() {
                Route::get('/', [
                    'as'    => 'administrator.logs.index',
                    'uses'  => 'LogsController@index',
                ]);
            });

            Route::group(['prefix' => 'seo'], function() {
                Route::get('/', [
                    'as'    => 'administrator.seo.index',
                    'uses'  => 'SeoController@index',
                ]);
                Route::get('store', [
                    'as'    => 'administrator.seo.store',
                    'uses'  => 'SeoController@store',
                ]);
            });

            Route::get('settings', [
                'as'    => 'administrator.settings',
                'uses'  => 'AdministratorController@settings',
            ]);

            Route::get('test', 'AdministratorController@test');
        });
    });
});