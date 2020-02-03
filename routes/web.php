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

// homepage - List all companies, same as picture

// homepage/company/{id}/ list a company
// homepage/company/{id}/edit edit a company
// homepage/company/create
// homepage/company/delete

// homepage/company/{id}/employees/ show all employees
// homepage/company/{id}/employees/create
// homepage/company/employees/{id}/ show employee
// homepage/company/employees/{id}/edit edit employee


Route::get('/', 'pagesController@home');

Route::get('/company/create', 'companiesController@create');
Route::post('/company/store', 'companiesController@store');

Route::get('/company/{company}', 'companiesController@show');
Route::get('/company/{company}/edit', 'companiesController@edit');
Route::patch('/company/{company}', 'companiesController@update');

Route::post('/company/{company}/employees', 'employeesController@store');
Route::get('/employees/{employee}/edit', 'employeesController@edit');
Route::patch('/employees/{employee}', 'employeesController@update');


// homepage/company/{id}/edit edit a company

// Auth::routes();
Auth::routes(['verify' => true, 'register' => false]);

// Route::get('/', 'HomeController@index')->name('home');
Route::get('/', 'pagesController@home');
