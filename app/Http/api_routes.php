<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where all API routes are defined.
|
*/

/* 
 * ------------------- Route API CRUD for Provider ---------------
 */
Route::group(['prefix' => 'providers', 'namespace' => 'Kitchen'], function () {	
	Route::get('/', [
		'as' => 'api.v1.kitchen.providers.index',
		'uses' => 'ProviderAPIController@index'
	]);
	Route::get('show/{id?}', [
		'as' => 'api.v1.kitchen.providers.show',
		'uses' => 'ProviderAPIController@show'
	]);
	Route::patch('update/{id?}', [
		'as' => 'api.v1.kitchen.providers.update',
		'uses' => 'ProviderAPIController@update'
	]);
	Route::delete('delete/{id?}', [
		'as' => 'api.v1.kitchen.providers.delete',
		'uses' => 'ProviderAPIController@destroy'
	]);
	Route::post('store', [
		'as' => 'api.v1.kitchen.providers.store',
		'uses' => 'ProviderAPIController@store'
	]);
});

/* 
 * ------------------- Route API CRUD for Type ---------------
 */
Route::group(['prefix' => 'types'], function () {	
	Route::get('/', [
		'as' => 'api.v1.types.index',
		'uses' => 'TypeAPIController@index'
	]);
	Route::get('show/{id?}', [
		'as' => 'api.v1.types.show',
		'uses' => 'TypeAPIController@show'
	]);
	Route::patch('update/{id?}', [
		'as' => 'api.v1.types.update',
		'uses' => 'TypeAPIController@update'
	]);
	Route::delete('delete/{id?}', [
		'as' => 'api.v1.types.delete',
		'uses' => 'TypeAPIController@destroy'
	]);
	Route::post('store', [
		'as' => 'api.v1.types.store',
		'uses' => 'TypeAPIController@store'
	]);
	Route::get('select-list', [
		'as' => 'api.v1.types.select-list',
		'uses' => 'TypeAPIController@selectList'
	]);	
});

/* 
 * ------------------- Route API CRUD for Presentation ---------------
 */
Route::group(['prefix' => 'presentations'], function () {	
	Route::get('/', [
		'as' => 'api.v1.presentations.index',
		'uses' => 'PresentationAPIController@index'
	]);
	Route::get('show/{id?}', [
		'as' => 'api.v1.presentations.show',
		'uses' => 'PresentationAPIController@show'
	]);
	Route::patch('update/{id?}', [
		'as' => 'api.v1.presentations.update',
		'uses' => 'PresentationAPIController@update'
	]);
	Route::delete('delete/{id?}', [
		'as' => 'api.v1.presentations.delete',
		'uses' => 'PresentationAPIController@destroy'
	]);
	Route::post('store', [
		'as' => 'api.v1.presentations.store',
		'uses' => 'PresentationAPIController@store'
	]);
	Route::get('select-list', [
		'as' => 'api.v1.presentations.select-list',
		'uses' => 'PresentationAPIController@selectList'
	]);	
});

/* 
 * ------------------- Route API CRUD for Unit ---------------
 */
Route::group(['prefix' => 'units'], function () {	
	Route::get('/', [
		'as' => 'api.v1.units.index',
		'uses' => 'UnitAPIController@index'
	]);
	Route::get('show/{id?}', [
		'as' => 'api.v1.units.show',
		'uses' => 'UnitAPIController@show'
	]);
	Route::patch('update/{id?}', [
		'as' => 'api.v1.units.update',
		'uses' => 'UnitAPIController@update'
	]);
	Route::delete('delete/{id?}', [
		'as' => 'api.v1.units.delete',
		'uses' => 'UnitAPIController@destroy'
	]);
	Route::post('store', [
		'as' => 'api.v1.units.store',
		'uses' => 'UnitAPIController@store'
	]);

	Route::get('select-list', [
		'as' => 'api.v1.units.select-list',
		'uses' => 'UnitAPIController@selectList'
	]);	
});



/* 
 * ------------------- Route API CRUD for InputMaterial ---------------
 */
Route::group(['prefix' => 'inputMaterials'], function () {	
	Route::get('/', [
		'as' => 'api.v1.inputMaterials.index',
		'uses' => 'InputMaterialAPIController@index'
	]);

	Route::get('/basic', [
		'as' => 'api.v1.inputMaterials.basic',
		'uses' => 'InputMaterialAPIController@basic'
	]);

	Route::get('show/{id?}', [
		'as' => 'api.v1.inputMaterials.show',
		'uses' => 'InputMaterialAPIController@show'
	]);
	Route::patch('update/{id?}', [
		'as' => 'api.v1.inputMaterials.update',
		'uses' => 'InputMaterialAPIController@update'
	]);
	Route::delete('delete/{id?}', [
		'as' => 'api.v1.inputMaterials.delete',
		'uses' => 'InputMaterialAPIController@destroy'
	]);
	Route::post('store', [
		'as' => 'api.v1.inputMaterials.store',
		'uses' => 'InputMaterialAPIController@store'
	]);
});

/* 
 * ------------------- Route API CRUD for Family ---------------
 */
Route::group(['prefix' => 'families'], function () {	
	Route::get('/', [
		'as' => 'api.v1.families.index',
		'uses' => 'FamilyAPIController@index'
	]);
	Route::get('show/{id?}', [
		'as' => 'api.v1.families.show',
		'uses' => 'FamilyAPIController@show'
	]);
	Route::patch('update/{id?}', [
		'as' => 'api.v1.families.update',
		'uses' => 'FamilyAPIController@update'
	]);
	Route::delete('delete/{id?}', [
		'as' => 'api.v1.families.delete',
		'uses' => 'FamilyAPIController@destroy'
	]);
	Route::post('store', [
		'as' => 'api.v1.families.store',
		'uses' => 'FamilyAPIController@store'
	]);

	Route::get('check-unique/{field}/{value?}', [
		'as' => 'api.v1.families.check-unique',
		'uses' => 'FamilyAPIController@checkUnique'
	]);

	Route::get('select-list', [
		'as' => 'api.v1.families.select-list',
		'uses' => 'FamilyAPIController@selectList'
	]);	
});

/* 
 * ------------------- Route API CRUD for SubFamily ---------------
 */
Route::group(['prefix' => 'sub-families'], function () {	
	Route::get('/', [
		'as' => 'api.v1.subFamilies.index',
		'uses' => 'SubFamilyAPIController@index'
	]);
	Route::get('show/{id?}', [
		'as' => 'api.v1.subFamilies.show',
		'uses' => 'SubFamilyAPIController@show'
	]);
	Route::patch('update/{id?}', [
		'as' => 'api.v1.subFamilies.update',
		'uses' => 'SubFamilyAPIController@update'
	]);
	Route::delete('delete/{id?}', [
		'as' => 'api.v1.subFamilies.delete',
		'uses' => 'SubFamilyAPIController@destroy'
	]);
	Route::post('store', [
		'as' => 'api.v1.subFamilies.store',
		'uses' => 'SubFamilyAPIController@store'
	]);

	Route::get('by-family/{familyId?}', [
		'as' => 'api.v1.subFamilies.byFamily',
		'uses' => 'SubFamilyAPIController@byFamily'
	]);	
});

/* 
 * ------------------- Route API CRUD for Item ---------------
 */
Route::group(['prefix' => 'items', 'namespace' => 'Kitchen'], function () {	
	
	Route::get('/', [
		'as' => 'api.v1.kitchen.items.index',
		'uses' => 'ItemAPIController@index'
	]);
	Route::get('show/{id?}', [
		'as' => 'api.v1.kitchen.items.show',
		'uses' => 'ItemAPIController@show'
	]);
	Route::patch('update/{id?}', [
		'as' => 'api.v1.kitchen.items.update',
		'uses' => 'ItemAPIController@update'
	]);
	Route::delete('delete/{id?}', [
		'as' => 'api.v1.kitchen.items.delete',
		'uses' => 'ItemAPIController@destroy'
	]);
	Route::post('store', [
		'as' => 'api.v1.kitchen.items.store',
		'uses' => 'ItemAPIController@store'
	]);

	Route::group(['prefix' => 'providers'], function () {	
		Route::get('{id?}', [
			'as' => 'api.v1.kitchen.items.providers.index',
			'uses' => 'ItemAPIController@providers'
		]);
		Route::get('available-list/{id?}', [
			'as' => 'api.v1.kitchen.items.providers.available-providers',
			'uses' => 'ItemAPIController@availableProviders'
		]);
		Route::get('available/{id?}', [
			'as' => 'api.v1.kitchen.items.providers.available',
			'uses' => 'ItemAPIController@hasAvailableProviders'
		]);
		Route::get('show/{id?}/{providerId?}', [
			'as' => 'api.v1.kitchen.items.providers.show',
			'uses' => 'ItemAPIController@provider'
		]);
		Route::get('exists/{id?}/{providerId?}', [
			'as' => 'api.v1.kitchen.items.providers.already-associate',
			'uses' => 'ItemAPIController@alreadyAssociate'
		]);		
		Route::patch('{id?}/{providerId?}', [
			'as' => 'api.v1.kitchen.items.providers.store',
			'uses' => 'ItemAPIController@storeProvider'
		]);	
		Route::delete('{id?}/{providerId?}', [
			'as' => 'api.v1.kitchen.items.providers.delete',
			'uses' => 'ItemAPIController@deleteProvider'
		]);		
	});

	/* 
	 * ------------------- Route API CRUD for UtensilCategory ---------------
	 */
	Route::group(['prefix' => 'utensils'], function () {	
		Route::group(['prefix' => 'categories'], function () {	
			Route::get('/', [
				'as' => 'api.v1.kitchen.utensils.categories.index',
				'uses' => 'UtensilCategoryAPIController@index'
			]);
			Route::get('show/{id?}', [
				'as' => 'api.v1.kitchen.utensils.categories.show',
				'uses' => 'UtensilCategoryAPIController@show'
			]);
			Route::patch('update/{id?}', [
				'as' => 'api.v1.kitchen.utensils.categories.update',
				'uses' => 'UtensilCategoryAPIController@update'
			]);
			Route::delete('delete/{id?}', [
				'as' => 'api.v1.kitchen.utensils.categories.delete',
				'uses' => 'UtensilCategoryAPIController@destroy'
			]);
			Route::post('store', [
				'as' => 'api.v1.kitchen.utensils.categories.store',
				'uses' => 'UtensilCategoryAPIController@store'
			]);
			Route::get('select-list', [
				'as' => 'api.v1.kitchen.utensils.categories.select-list',
				'uses' => 'UtensilCategoryAPIController@selectList'
			]);
		});	

		/* 
		 * ------------------- Route API CRUD for Utensil ---------------
		 */
		Route::get('/', [
			'as' => 'api.v1.kitchen.utensils.index',
			'uses' => 'UtensilAPIController@index'
		]);
		Route::get('show/{id?}', [
			'as' => 'api.v1.kitchen.utensils.show',
			'uses' => 'UtensilAPIController@show'
		]);
		Route::patch('update/{id?}', [
			'as' => 'api.v1.kitchen.utensils.update',
			'uses' => 'UtensilAPIController@update'
		]);
		Route::delete('delete/{id?}', [
			'as' => 'api.v1.kitchen.utensils.delete',
			'uses' => 'UtensilAPIController@destroy'
		]);
		Route::post('store', [
			'as' => 'api.v1.kitchen.utensils.store',
			'uses' => 'UtensilAPIController@store'
		]);	
	});

	Route::group(['prefix' => 'recipes', 'namespace' => 'Recipe'], function () {
		/* 
		 * ------------------- Route API CRUD for RecipeType ---------------
		 */
		Route::group(['prefix' => 'types'], function () {	
			Route::get('/', [
				'as' => 'api.v1.kitchen.recipes.types.index',
				'uses' => 'RecipeTypeAPIController@index'
			]);
			Route::get('show/{id?}', [
				'as' => 'api.v1.kitchen.recipes.types.show',
				'uses' => 'RecipeTypeAPIController@show'
			]);
			Route::patch('update/{id?}', [
				'as' => 'api.v1.kitchen.recipes.types.update',
				'uses' => 'RecipeTypeAPIController@update'
			]);
			Route::delete('delete/{id?}', [
				'as' => 'api.v1.kitchen.recipes.types.delete',
				'uses' => 'RecipeTypeAPIController@destroy'
			]);
			Route::post('store', [
				'as' => 'api.v1.kitchen.recipes.types.store',
				'uses' => 'RecipeTypeAPIController@store'
			]);
			Route::get('select-list', [
				'as' => 'api.v1.kitchen.recipes.types.select-list',
				'uses' => 'RecipeTypeAPIController@selectList'
			]);
		});

		/* 
		 * ------------------- Route API CRUD for BaseRecipe ---------------
		 */
		Route::group(['prefix' => 'bases'], function () {	
			Route::get('/', [
				'as' => 'api.v1.kitchen.recipes.bases.index',
				'uses' => 'BaseRecipeAPIController@index'
			]);
			Route::get('show/{id?}', [
				'as' => 'api.v1.kitchen.recipes.bases.show',
				'uses' => 'BaseRecipeAPIController@show'
			]);
			Route::patch('update/{id?}', [
				'as' => 'api.v1.kitchen.recipes.bases.update',
				'uses' => 'BaseRecipeAPIController@update'
			]);
			Route::delete('delete/{id?}', [
				'as' => 'api.v1.kitchen.recipes.bases.delete',
				'uses' => 'BaseRecipeAPIController@destroy'
			]);
			Route::post('store', [
				'as' => 'api.v1.kitchen.recipes.bases.store',
				'uses' => 'BaseRecipeAPIController@store'
			]);
		});
	});
});