<?php

/* Route Model Binding */
/* app()->bind('example', function (){
    return new \App\Example;
}); */

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

/* Route::get('/', function() {
   dd(app('foo'));
}); */

Route::get('/', 'PagesController@home');

Route::resource('venues', 'VenuesController');

Route::resource('events', 'EventsController');

/* IMAGE UPLOAD ROUTES */

Route::post('fileUpload', [
    'as' => 'image.add',
    'uses' => 'ImageUploadController@fileUpload'
]);


/* Unused atm

Route::resource('projects', 'ProjectsController');

Route::post('/projects/{project}/tasks', 'ProjectTasksController@store');

Route::patch('/tasks/{task}', 'ProjectTasksController@update');

*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/imageUpload', 'ImageUploadController@index');
