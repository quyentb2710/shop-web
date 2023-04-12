<?php

use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\User\UserAuthController;
use Illuminate\Http\Request;
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
Route::group(['namespace' => 'App\Http\Controllers'], function()
{   
    /**
     * Home Routes
     */
    // Route::get('/', 'HomeController@index');

    Route::get('/bootstrap', function () {
        return view('bootstrap');
    });

    /**
     * Admin Routes
     */
    Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function() {
        Route::get('/login', [AdminAuthController::class, 'getLogin'])->name('adminLogin');
        Route::get('/logout', [AdminAuthController::class, 'getLogout'])->name('adminLogout');
        Route::post('/login', [AdminAuthController::class, 'postLogin'])->name('adminLoginPost');


        Route::get('/category', ['CategoryController', 'index'])->name('admin.category');
        Route::get('/category/add', ['CategoryController', 'add'])->name('admin.category.add');
        Route::post('/category/add', ['CategoryController', 'add'])->name('admin.category.add');
 
        Route::group(['middleware' => 'admin'], function () {
            Route::get('/', function () {
                return view('admin.home.index');
            })->name('adminDashboard');
    
        });
    });
    // Route::prefix('admin')->group(function() {
    //     Route::get('/', 'Admin\HomeController@index')->name('admin');
    //     // Route::group(['middleware' => ['admin']], function() {
    //         Route::get('/login', 'Admin\LoginController@index')->name('admin.login');
    //         Route::post('/login', 'Admin\LoginController@login')->name('login.perform');
    //         Route::get('/logout', 'Admin\LogoutController@logout')->name('admin.logout');
    //     // });
        
    // });

    // // Route::prefix('user')->group(function() {
    //     Route::get('/', 'User\HomeController@index')->name('user');
    //     // Route::group(['middleware' => ['admin']], function() {
    //         Route::get('/login', 'User\LoginController@index')->name('user.login');
    //         Route::post('/login', 'User\LoginController@login')->name('user.perform');
    //         Route::get('/logout', 'User\LogoutController@logout')->name('user.logout');
    //     // });
        
    // // });


    // Route::group(['middleware' => ['admin']], function() {
    //     Route::prefix('admin')->group(function() {
    //         Route::get('/', 'Admin\HomeController@index')->name('admin');
    //         Route::get('/login', 'Admin\LoginController@index')->name('admin.login');
    //         Route::post('/login', 'Admin\LoginController@login')->name('login.perform');
    //     });

    //     Route::prefix('user')->group(function() {
    //         Route::get('/', 'User\HomeController@index')->name('user');
    //     });
    // });
    

    /**
     * User Routes
     */

     Route::group(['prefix' => 'user', 'namespace' => 'User'], function() {
        Route::get('/login', [UserAuthController::class, 'getLogin'])->name('userLogin');
        Route::get('/logout', [UserAuthController::class, 'getLogout'])->name('userLogout');
        Route::post('/login', [UserAuthController::class, 'postLogin'])->name('userLoginPost');
 
        Route::group(['middleware' => 'user'], function () {
            Route::get('/', function () {
                return view('user.home.index');
            })->name('userDashboard');
    
        });
    });


    // Route::prefix('user')->group(function() {
    //     Route::get('/', 'HomeController@index')->name('user');
    // });

    // Route::group(['middleware' => ['guest']], function() {
    //     /**
    //      * Register Routes
    //      */
    //     Route::get('/register', 'RegisterController@show')->name('register.show');
    //     Route::post('/register', 'RegisterController@register')->name('register.perform');

    //     /**
    //      * Login Routes
    //      */
    //     // Route::get('/login', 'LoginController@show')->name('login.show');
    //     // Route::post('/login', 'LoginController@login')->name('login.perform');

    // });

    // Route::group(['middleware' => ['auth']], function() {
    //     /**
    //      * Logout Routes
    //      */
    //     Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
    // });
});