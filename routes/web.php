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
    return view('welcome');
});

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/posts/dupliquer', 'PostsController@dupliquer');

Route::resource('posts','PostsController');

Route::get('/downpdfhtml', function () {

     return view('downpdfhtml');

});
Route::get('/downpdf', function () {
        return view('downpdf');
});
Route::get('/export', 'ExportExcelController@export');
Route::get('/exportexcel', 'ExportExcelController@index');
Route::get('/exportexcel', 'ExportExcelController@excel')->name('exportexcel.excel');
?>