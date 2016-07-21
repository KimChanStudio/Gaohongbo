<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/error', function () {
    return view('errors/error');
});
Route::get('/success', function () {
    return view('errors/success');
});
Route::get('admin/error', function () {
    return view('errors/admin/error');
});
Route::get('admin/success', function () {
    return view('errors/admin/success');
});


/* index route */
Route::get('/', function () {
    return view('index/index');
});

Route::get('/index', function () {
    return view('index/index');
});
//Route::get('/home', function () {
//    return view('index/home');
//});
Route::get('/home', 'HomeController@index');
Route::get('/about-gao', function () {
    return view('index/about-gao');
});
Route::get('/about', function () {
    return view('index/about');
});
Route::get('/database', function () {
    return view('index/database');
});
Route::get('/fans-club', function () {
    return view('index/fans-club');
});

//Route::controllers([
//    //auth
//    'auth'     => 'Auth\AuthController',
//    'password' => 'Auth\PasswordController',
//
//    //'tieba'    => 'Tieba\IndexController',
//    //user
//    //'user'     => 'User\UserController',
//    //Admin
//    //'admin'    => 'Admin\IndexController',
//    //'admin_user' => 'Admin\User\UserController',
//
//]);
/* auth */
//Route::auth();
Route::group(['prefix' => 'auth','namespace' => 'Auth'], function () {
    Route::get('login', 'AuthController@getLogin');
    Route::post('login', 'AuthController@postLogin');
    Route::get('logout', 'AuthController@logout');
    Route::get('register', 'AuthController@getRegister');
    Route::post('register', 'AuthController@postRegister');
    Route::get('activate', 'AuthController@activation');
    Route::group(['prefix' => 'admin'], function () {
        Route::get('login', 'AuthController@getAdminLogin');
        Route::post('login', 'AuthController@postAdminLogin');
    });
});

Route::group(['prefix' => 'user','namespace' => 'User'], function () {
    Route::get('profile', 'UserController@showProfile');
    Route::get('username/edit', 'UserController@editUsername');
    Route::get('profile/edit', 'UserController@editProfile');

});

Route::group(['prefix' => 'post','namespace' => 'Post'], function () {
    Route::get('read', 'PostController@readPost');
});

Route::group(['namespace' => 'Admin','prefix' => 'admin','middleware' => 'admin.IsAdminMiddleware'], function () {
    Route::get('index', 'AdminController@index');
    Route::group(['prefix' => 'user'], function () {
        Route::get('index', 'UserController@index');
        Route::get('list', 'UserController@showUserList');
        Route::get('detail', 'UserController@showUserProfile');
        Route::get('add', 'UserController@showAddUser');
        Route::post('add', 'UserController@addUser');
//        Route::get('username/edit', 'UserController@editUsername');
//        Route::get('profile/edit', 'UserController@editProfile');
        Route::get('activate', 'UserController@activateUser');
        Route::group(['middleware' => 'admin.IsEnoughPermissionMiddleware'], function () {
            Route::get('username/edit', 'UserController@editUsername');
            Route::get('profile/edit', 'UserController@editProfile');


        });

    });
    Route::group(['prefix' => 'post'], function () {
        Route::get('list', 'PostController@showPostList');
        Route::get('edit', 'PostController@getEditPost');
        Route::post('edit', 'PostController@postEditPost');
        Route::get('add', 'PostController@getAddPost');
        Route::post('add', 'PostController@postAddPost');
    });

});



///* database partials view get */
//Route::get('index/database/database', function()
//{
//    return view('index.database');
//});
Route::group(['prefix' => 'database'], function () {
    Route::get('database-menu', function ()    {
        return view('index.database.database-menu');
    });
    Route::get('coach-zhongguonanzu-1', function ()    {
        return view('index.database.coach-zhongguonanzu-1');
    });
    Route::get('coach-ADO', function ()    {
        return view('index.database.coach-ADO');
    });
    Route::get('coach-zhongguonanzu-2', function ()    {
        return view('index.database.coach-zhongguonanzu-2');
    });
});


