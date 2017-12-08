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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::group(array('domain' => env('APP_HOST')), function() {


    Route::get('/', function () {
        return view('index');
    });
    Route::get('view', ['uses' => 'FormController@dataView']);
    Route::post('view', ['uses' => 'FormController@dataView']);
    Route::post('insert', 'FormController@insertData');

    Route::get('profile/{id}', 'FormController@editData');
    Route::get('persons', 'FormController@getPersons');
    Route::get('about', function () {
        return view('about');
    });
    Route::get('mens', function () {
        return view('mens');
    });
    Route::get('womens', function () {
        return view('womens');
    });
    Route::get('icons', function () {
        return view('icons');
    });
    Route::get('contact', function () {
        return view('contact');
    });

    Route::get('single', function () {
        return view('single');
    });
    Route::get('welcome', function () {
        return view('welcome');
    });

    Route::post('register', 'Auth\RegisterController@register');
    Route::post('login', 'Auth\LoginController@login');
    Route::get('logout', 'Auth\LoginController@logout');
    route::post('forgotPassword','Auth\ForgotPasswordController@sendResetLinkEmail');
    Route::get('admin', 'admin\AdminController@dashboard');


});

Route::group(array('domain' => 'admin.'.env('APP_HOST')), function() {

    Route::get('/', function () {
            return view('admin.auth.login');
    })->middleware('admin_rdrct');

    Route::post('login', 'Admin\Auth\AdminLoginController@login');

    Route::group(['middleware' => 'admin_auth'], function () {

        Route::get('/dashboard', function () {
            return view('admin.dashboard');
        });

        Route::get('/user', function () {
            return view('admin.user');
        })->middleware('admin_auth');

        Route::get('/logout', 'Admin\Auth\AdminLoginController@logout');

        });
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
