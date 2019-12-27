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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('slidemenu');
});

/*Route::get('/viewcategory', function () {
    return view('viewcategory');
});*/

Route::get('/addcategory', function () {
    return view('addcategory');
});

Route::get('/addsubcategory', function () {
    return view('addsubcategory');
});

Route::get('/addcategory', function () {
    return view('addcategory');
});

Route::get('/addseller', function () {
    return view('addseller');
});

Route::get('/addcustomer', function () {
    return view('addcustomer');
});

//Route::get('/prodview','TestController@prodfunct');

Route::get('/search','CategoryController@search');
Route::get('/addsubcategory','SubcategoriesController@create');


Route::resource('/item','CategoryController');
//Route::resource('/subcategory','SubCategoryController');
Route::resource('/subcategories','SubcategoriesController');
Route::resource('/seller','SellerController');
Route::resource('/customer','CustomerController');



