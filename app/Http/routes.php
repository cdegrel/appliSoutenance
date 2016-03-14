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

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/planning', 'PlanningController@index');

	//Page grille jury
    Route::get('grille/{id}/{idE}', 'GroupeProjetController@show');
	//route lorsque l'utilisateur valide le formulaire de la page grille jury
	Route::post('grille/{id}/{idE}', 'GroupeProjetController@post');

	//Page de visualisation après validation du maître de la page grille jury
	Route::get('recapitulation/{id}', 'RecapitulationController@show');
	//route lorsque l'utilisateur valide le formulaire de la page recapitulation
	Route::post('recapitulation/{id}', 'RecapitulationController@post');

	//Page de planning
	Route::get('planning/', 'PlanningController@ShowSoutenance');
	//Données du planning
	Route::get('planning/api', 'PlanningController@api');
});
