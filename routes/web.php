<?php

use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleare group. Now create something great!
|
*/
Route::get('/import/events', 'ImportController@importEvents');
Route::get('/import/workers', 'ImportController@importWorkers');

Route::get('/', 'HomeController@show');

Route::get('/events', 'EventController@show');
Route::get('/events/input', 'EventController@showInput');
Route::post('/eventAction', 'EventController@storeEvent');

Route::get('/workers', 'WorkerController@showInput');
Route::get('/workers/input', 'WorkerController@show');
Route::post('/workerAction', 'WorkerController@storeWorker');

Route::get('/organizers', 'EventOrganizersController@show');
Route::get('/organizers/input', 'EventOrganizersController@showInput');
Route::post('/organizerAction', 'EventOrganizersController@storeOrganizer');