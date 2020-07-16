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
    if (Auth::user()) {
        info('here 1');
        info('here 2');
        return redirect('/admin');
    } else {
        info('here 3');
        return redirect('/login');
    }
});

// Route::get('/', 'CompanyController@welcome')->name('welcome');
// Route::get('/aboutus', 'CompanyController@aboutus')->name('aboutus');
// Route::get('/services', 'CompanyController@services')->name('services');
// Route::get('/policy', 'CompanyController@policy')->name('policy');
// Route::get('/conditions', 'CompanyController@conditions')->name('conditions');
// Route::get('/', 'CompanyController@welcome')->name('welcome');

Auth::routes(['register' => false]);

Route::get('/home', function () {
    return redirect('admin');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::group(['middleware' => 'auth'], function () {
    Route::post('admin/gym/memberships/', 'Voyager\PersonController@Memberships')->middleware('auth')->name('gym.memberships');
});