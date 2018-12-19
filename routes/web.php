<?php

/* 
!-------ROUTES-----!
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', ['as'=>'/','uses'=>'LoginController@getLogin']);





Route::post('/login',['as'=>'login','uses'=>'LoginController@postLogin']);

Route::get('/noPermission', function(){
		return view('permission.noPermission');

});

Route::group(['middleware'=>['authen']],function(){
	Route::get('/logout',['as'=>'logout','uses'=>'LoginController@getLogout']);
});

Route::group(['middleware'=>['authen','roles'],'roles'=>['Administrator']],function()
{

	Route::get('/receive-input',['as'=>'dashboard','uses'=>'admin\adminController@admin_dashboard']);

	Route::get('/inventory-output',['as'=>'inventory_output','uses'=>'admin\adminController@inventory_out']);

	Route::get('/inventory-transfer',['as'=>'inventory_transfer','uses'=>'admin\adminController@inventory_transfer']);

	Route::get('/inventory-balance',['as'=>'inventory_balance','uses'=>'admin\adminController@inventory_balance']);




	//post
	Route::post('/postInventory', ['as'=>'postInventory', 'uses'=>'admin\adminController@postInventory']);
	Route::post('/postInventoryBranch', ['as'=>'postInventoryBranch', 'uses'=>'admin\adminController@postInventoryBranch']);
	Route::post('/getInventoryList', ['as'=>'getInventoryList', 'uses'=>'admin\adminController@getInventoryList']);

	Route::post('/getBranchStock', ['as'=>'getBranchStock', 'uses'=>'admin\adminController@getBranchStock']);

	Route::post('/searchItems', ['as'=>'searchItems', 'uses'=>'admin\adminController@search_inventory_balance']);

	Route::resource('admin', 'adminController');
		
});