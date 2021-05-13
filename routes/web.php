<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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

Route::get('/places', [Controllers\Places::class, 'list']);
Route::get('/places/{id}', [Controllers\Places::class, 'page']);

Route::get('/tours/guided', [Controllers\ToursGuided::class, 'list']);
Route::get('/tours/guided/{id}', [Controllers\ToursGuided::class, 'page']);

Route::get('/tours', [Controllers\Tours::class, 'list']);
Route::get('/tours/{id}', [Controllers\Tours::class, 'page']);

Route::get('/', [Controllers\Main::class,'index']);


/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('admin-users')->name('admin-users/')->group(static function() {
            Route::get('/',                                             'AdminUsersController@index')->name('index');
            Route::get('/create',                                       'AdminUsersController@create')->name('create');
            Route::post('/',                                            'AdminUsersController@store')->name('store');
            Route::get('/{adminUser}/impersonal-login',                 'AdminUsersController@impersonalLogin')->name('impersonal-login');
            Route::get('/{adminUser}/edit',                             'AdminUsersController@edit')->name('edit');
            Route::post('/{adminUser}',                                 'AdminUsersController@update')->name('update');
            Route::delete('/{adminUser}',                               'AdminUsersController@destroy')->name('destroy');
            Route::get('/{adminUser}/resend-activation',                'AdminUsersController@resendActivationEmail')->name('resendActivationEmail');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::get('/profile',                                      'ProfileController@editProfile')->name('edit-profile');
        Route::post('/profile',                                     'ProfileController@updateProfile')->name('update-profile');
        Route::get('/password',                                     'ProfileController@editPassword')->name('edit-password');
        Route::post('/password',                                    'ProfileController@updatePassword')->name('update-password');
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('tours')->name('tours/')->group(static function() {
            Route::get('/',                                             'ToursController@index')->name('index');
            Route::get('/create',                                       'ToursController@create')->name('create');
            Route::post('/',                                            'ToursController@store')->name('store');
            Route::get('/{tour}/edit',                                  'ToursController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'ToursController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{tour}',                                      'ToursController@update')->name('update');
            Route::delete('/{tour}',                                    'ToursController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('menus')->name('menus/')->group(static function() {
            Route::get('/',                                             'MenusController@index')->name('index');
            Route::get('/create',                                       'MenusController@create')->name('create');
            Route::post('/',                                            'MenusController@store')->name('store');
            Route::get('/{menu}/edit',                                  'MenusController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'MenusController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{menu}',                                      'MenusController@update')->name('update');
            Route::delete('/{menu}',                                    'MenusController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('tours')->name('tours/')->group(static function() {
            Route::get('/',                                             'ToursController@index')->name('index');
            Route::get('/create',                                       'ToursController@create')->name('create');
            Route::post('/',                                            'ToursController@store')->name('store');
            Route::get('/{tour}/edit',                                  'ToursController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'ToursController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{tour}',                                      'ToursController@update')->name('update');
            Route::delete('/{tour}',                                    'ToursController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('guided-tours')->name('guided-tours/')->group(static function() {
            Route::get('/',                                             'GuidedToursController@index')->name('index');
            Route::get('/create',                                       'GuidedToursController@create')->name('create');
            Route::post('/',                                            'GuidedToursController@store')->name('store');
            Route::get('/{guidedTour}/edit',                            'GuidedToursController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'GuidedToursController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{guidedTour}',                                'GuidedToursController@update')->name('update');
            Route::delete('/{guidedTour}',                              'GuidedToursController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('places')->name('places/')->group(static function() {
            Route::get('/',                                             'PlacesController@index')->name('index');
            Route::get('/create',                                       'PlacesController@create')->name('create');
            Route::post('/',                                            'PlacesController@store')->name('store');
            Route::get('/{place}/edit',                                 'PlacesController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'PlacesController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{place}',                                     'PlacesController@update')->name('update');
            Route::delete('/{place}',                                   'PlacesController@destroy')->name('destroy');
        });
    });
});