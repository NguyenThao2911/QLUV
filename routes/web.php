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

Route::get('login',[
	'as'=>'login',
	'uses'=>'UserController@getLogin'
	]);
Route::post('login',[
	'as'=>'login',
	'uses'=>'UserController@postLogin'
	]);
Route::get('logout',[
	'as'=>'logout',
	'uses'=>'UserController@postLogout'
	]);
Route::group(['middleware'=>'login'],function(){
	Route::get('home',[
		'as'=>'trangchu',
		'uses'=>'UserController@getTrangchu'
		]);
	Route::group(['prefix'=>'candidate'],function(){
		Route::get('/list',[
			'as'=>'list.candidate',
			'uses'=>'CandidateController@getListCandidate'
			]);
		Route::get('/add',[
			'as'=>'candidate.getadd',
			'uses'=>'CandidateController@getAddCandidate'
			]);
		Route::post('/add',[
			'as'=>'candidate.postadd',
			'uses'=>'CandidateController@postAddCandidate'
			]);
		Route::get('/edit/{id}',[
			'as'=>'candidate.getedit',
			'uses'=>'CandidateController@getEditCandidate'
			]);
		Route::post('/edit/{id}',[
			'as'=>'candidate.update',
			'uses'=>'CandidateController@updateCandidate'
			]);
		Route::group(['middleware'=>'role'],function(){
			Route::get('/delete/{id}',[
				'as'=>'candidate.delete',
				'uses'=>'CandidateController@deleteCandidate'
				]);
		});
		
	});
	Route::group(['prefix'=>'user', 'middleware'=>'role'],function(){
		Route::get('/list',[
			'as'=>'list.user',
			'uses'=>'UserController@getListUser'
			]);
		Route::get('/add',[
			'as'=>'user.getadd',
			'uses'=>'UserController@getAddUser'
			]);
		Route::post('/add',[
			'as'=>'user.postadd',
			'uses'=>'UserController@postAddUser'
			]);
		Route::get('/edit/{id}',[
			'as'=>'user.getedit',
			'uses'=>'UserController@getEditUser'
			]);
		Route::post('/edit/{id}',[
			'as'=>'user.update',
			'uses'=>'UserController@updateUser'
			]);
		Route::get('/delete/{id}',[
			'as'=>'user.delete',
			'uses'=>'UserController@deleteUser'
			]);
	});
});