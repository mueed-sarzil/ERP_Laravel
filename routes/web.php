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
    return redirect()->route('login.index');
});
Route::get('/login', 'LoginController@index')->name('login.index');
Route::post('/login', 'LoginController@verify');
Route::get('/logout', 'LogoutController@index')->name('logout.index');

Route::group(['middleware'=>['sess']], function(){
Route::get('/admin/profile', 'AdminController@index')->name('admin.index');
Route::get('/admin/profile/{id}/edit', 'AdminController@edit')->name('admin.edit');
Route::post('/admin/profile/{id}/edit', 'AdminController@edited');
//Route::get('/admin/profile', 'AdminController@profileshow')->name('admin.profile');

Route::get('/admin/create_emp', 'AdminController@create')->name('admin.create_emp');
Route::post('/admin/create_emp', 'AdminController@empstore');

Route::get('/admin/{id}/delete', 'AdminController@delete')->name('admin.delete');
Route::post('/admin/{id}/delete', 'AdminController@destroy');

Route::get('/admin/{id}/view', 'AdminController@view')->name('admin.view');

Route::get('/admin/emp-list', 'AdminController@emp_list')->name('admin.emp-list');
Route::get('/admin/complain', 'AdminController@complain')->name('admin.complain');
Route::post('/admin/complain', 'AdminController@complainstore');
Route::get('/admin/complain-list', 'AdminController@complain_list')->name('admin.complain-list');

Route::get('/admin/budget', 'AdminController@budget')->name('admin.budget');
Route::post('/admin/budget', 'AdminController@budgetstore');
Route::get('/admin/budget_show', 'AdminController@budgetshow')->name('admin.budget_show');

Route::get('/admin/{id}/bdelete', 'AdminController@bdelete')->name('admin.bdelete');
Route::post('/admin/{id}/bdelete', 'AdminController@bdestroy');

Route::get('/admin/budget/{id}/edit', 'AdminController@budget_edit')->name('admin.budget_edit');
Route::post('/admin/budget/{id}/edit', 'AdminController@budget_edited');
//Route::get('/admin/budget_show', 'AdminController@budgetshow')->name('admin.budget_show');

});