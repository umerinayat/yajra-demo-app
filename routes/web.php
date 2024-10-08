<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'IndexController@employeesDataTable')->name('employees.DataTable');

Route::get('/model-paginate', 'IndexController@index');


// Resources Routes
Route::resource('employee', 'EmployeeController');
