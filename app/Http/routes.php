<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/test', function(){
	return App\Models\Family::first()->input_material;
});

Route::get('/', 'HomeController@index');


/*
|--------------------------------------------------------------------------
| API routes
|--------------------------------------------------------------------------
*/

Route::group(['prefix' => 'api', 'namespace' => 'API'], function () {
    Route::group(['prefix' => 'v1'], function () {
        require config('infyom.laravel_generator.path.api_routes');
    });
});


Route::get('login', 'Auth\AuthController@getLogin');
Route::post('login', 'Auth\AuthController@postLogin');
Route::get('logout', 'Auth\AuthController@logout');

// Registration Routes...
Route::get('register', 'Auth\AuthController@getRegister');
Route::post('register', 'Auth\AuthController@postRegister');

// Password Reset Routes...
Route::get('password/reset', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');

/* 
 * ------------------- Route index for Provider ---------------
 */
Route::get('kitchen/providers', [
	'as' => 'kitchen.providers.index',
	'uses' => function() {
		return view('kitchen.providers.index');
	}
]);

/* 
 * ------------------- Route index for Type ---------------
 */
Route::get('types', [
	'as' => 'types.index',
	'uses' => function() {
		return view('types.index');
	}
]);

/* 
 * ------------------- Route index for Presentation ---------------
 */
Route::get('presentations', [
	'as' => 'presentations.index',
	'uses' => function() {
		return view('presentations.index');
	}
]);

/* 
 * ------------------- Route index for Unit ---------------
 */
Route::get('units', [
	'as' => 'units.index',
	'uses' => function() {
		return view('units.index');
	}
]);


/* 
 * ------------------- Route index for InputMaterial ---------------
 */
Route::get('input-materials', [
	'as' => 'inputMaterials.index',
	'uses' => function() {
		return view('inputMaterials.index');
	}
]);

/* 
 * ------------------- Route index for Family ---------------
 */
Route::get('families', [
	'as' => 'families.index',
	'uses' => function() {
		return view('families.index');
	}
]);

/* 
 * ------------------- Route index for SubFamily ---------------
 */
Route::get('sub-families', [
	'as' => 'subFamilies.index',
	'uses' => function() {
		return view('subFamilies.index');
	}
]);

/* 
 * ------------------- Route index for Item ---------------
 */
Route::group(['prefix' => 'kitchen'], function () {	
	Route::group(['prefix' => 'items'], function() {
		Route::get('', [
			'as' => 'kitchen.items.index',
			'uses' => function() {
				return view('kitchen.items.index');
			}
		]);	

		Route::group(['prefix' => 'providers'], function() {
			Route::get('{item?}', [
				'as' => 'kitchen.items.providers.index',
				'uses' => function (App\Models\Kitchen\Item $item) {
					return view('kitchen.items.providers.index', compact('item'));
				}
			]);
		});
	});
});