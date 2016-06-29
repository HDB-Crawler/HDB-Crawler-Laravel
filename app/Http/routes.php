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

Route::get('/', function () {
    return view('welcome');
});

Route::post('/signup', [
	'uses' => 'UserController@postSignUp',
	'as' => 'signup'
]);

Route::post('/signin', [
	'uses' => 'UserController@postSignIn',
	'as' => 'signin'
]);

Route::get('/dashboard', [
	'uses' => 'ActivityController@getDashboard',
	'as' => 'dashboard'
]);

Route::post('/create_activity', [
	'uses' => 'ActivityController@postCreateActivity',
	'as' => 'activity.create'
]);

Route::get('/past_activities', [
	'uses' => 'ActivityController@getHistory',
	'as' => 'past_activities'
]);

Route::get('/past_activities/37/feedbacks', [
	'uses' => 'FeedbackController@getFeedbacks',
	'as' => 'feedbacks'
]);

Route::get('/apiGetActivities', [
	'uses' => 'ActivityController@apiGetActivities',
	'as' => 'apiGetActivities'
]);

Route::get('/postApiSetFeedback', [
	'uses' => 'ActivityController@postApiSetFeedback',
	'as' => 'postApiSetFeedback'
]);