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
	//dd(App\Models\Kitchen\Item::findOrFail(3)->bases);
	//dd(App\Models\Kitchen\Item::findOrFail(3)->bases->first()->pivot->base);
	//App\Models\Kitchen\Recipe\BaseRecipe::first()->items->first()->pivot->getCostAttribute();
	//
	/*$searchableColumns = [
        'name', 
        'relation' => [
            'providers' => [
                'name', 
                'specialty'
            ],
            'bases' => [
                'name'
            ], 
            'family' => [
                'name'
            ],
            'subFamily' => [
                'name'
            ],
            'unit' => [
                'name'
            ],
            'presentation' => [
                'name'
            ]           
        ]
    ];
    
	foreach ($searchableColumns as $key => $field) {
        $column = $field;
        echo "<br><b>$key: ";
        if ( is_array ( $field ) ) {
            foreach ($field as $relation => $field) {
            	# code...
            }
        } else {
            echo $value;
        }
    }*/

    Bugsnag::notifyError('ErrorType', 'Test Error');
});

Route::get('/', 'HomeController@index');

/*
|--------------------------------------------------------------------------
| Auth Include routes
|--------------------------------------------------------------------------
*/
require app_path('Http/Routes/Web/Auth.php');

/*
|--------------------------------------------------------------------------
| General Include routes
|--------------------------------------------------------------------------
*/
require app_path('Http/Routes/Web/General.php');

/*
|--------------------------------------------------------------------------
| Kitchen Include routes module
|--------------------------------------------------------------------------
*/
require app_path('Http/Routes/Web/Kitchen.php');

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