<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::group(['middleware' => 'web'], function () {
	Route::get('/','HomeController@hello');
	//
	Route::auth();
	Route::group(['middleware' => 'auth'], function () {
	    Route::get('/home', 'HomeController@index');
	    Route::get('test_user',function(){
	    	echo Entrust::hasRole('admin'); die;
			$user = Auth::user();
			echo $user->hasRole('admin'); die;
			echo "<pre>"; print_r($user); die;
		});



	    Route::group(['prefix' => 'admin', 'middleware' => ['role:admin']], function() {
			Route::get('/', 'AdminController@dashboard');
		});
		
	});
	//Admin access URL: admin/*
	


	/**/
	Route::resource('users','UserController');
	Route::get('roles',['as'=>'roles.index','uses'=>'RoleController@index','middleware' => ['permission:role-list|role-create|role-edit|role-delete']]);
	Route::get('roles/create',['as'=>'roles.create','uses'=>'RoleController@create','middleware' => ['permission:role-create']]);
	Route::post('roles/create',['as'=>'roles.store','uses'=>'RoleController@store','middleware' => ['permission:role-create']]);
	Route::get('roles/{id}',['as'=>'roles.show','uses'=>'RoleController@show']);
	Route::get('roles/{id}/edit',['as'=>'roles.edit','uses'=>'RoleController@edit','middleware' => ['permission:role-edit']]);
	Route::patch('roles/{id}',['as'=>'roles.update','uses'=>'RoleController@update','middleware' => ['permission:role-edit']]);
	Route::delete('roles/{id}',['as'=>'roles.destroy','uses'=>'RoleController@destroy','middleware' => ['permission:role-delete']]);

	/*Route::get('itemCRUD2',['as'=>'itemCRUD2.index','uses'=>'ItemCRUD2Controller@index','middleware' => ['permission:item-list|item-create|item-edit|item-delete']]);
	Route::get('itemCRUD2/create',['as'=>'itemCRUD2.create','uses'=>'ItemCRUD2Controller@create','middleware' => ['permission:item-create']]);
	Route::post('itemCRUD2/create',['as'=>'itemCRUD2.store','uses'=>'ItemCRUD2Controller@store','middleware' => ['permission:item-create']]);
	Route::get('itemCRUD2/{id}',['as'=>'itemCRUD2.show','uses'=>'ItemCRUD2Controller@show']);
	Route::get('itemCRUD2/{id}/edit',['as'=>'itemCRUD2.edit','uses'=>'ItemCRUD2Controller@edit','middleware' => ['permission:item-edit']]);
	Route::patch('itemCRUD2/{id}',['as'=>'itemCRUD2.update','uses'=>'ItemCRUD2Controller@update','middleware' => ['permission:item-edit']]);
	Route::delete('itemCRUD2/{id}',['as'=>'itemCRUD2.destroy','uses'=>'ItemCRUD2Controller@destroy','middleware' => ['permission:item-delete']]);*/
	/**/


	// Route::get('mail',function(){
	// 	/// NOTE add in the right view
	// 	$mail = Mail::send('home', array('key' => 'value'), function($message){
	// 		$message->from('rameshsrinivasanbe@gmail.com');
	// 		$message->to('rameshsrinivasanbe@gmail.com', 'Ramesh S')->subject('Welcome!');
	// 	});
	// 	echo $mail;
	// });

	// Route::get('feed_db',function(){
	// 	$admin = new \App\Role();
	// 	// echo "<pre>"; print_r($admin); echo "</pre>"; die;
	// 	$admin->name         = 'admin';
	// 	$admin->display_name = 'User Administrator'; // optional
	// 	$admin->description  = 'User is allowed to manage and edit other users'; // optional
	// 	$admin->save();
	// });
});