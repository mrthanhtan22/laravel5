<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::resource('articles', 'ArticlesController');
Route::get('abc', 'TestController@index');



Auth::routes();

Route::get('/home', 'HomeController@index');

Event::listen('illuminate.query', function($query){

	var_dump($query);
});
Route::get('/faq', function() {
	if (Cache::has('faqs')) {
		return Cache::get('faqs');
	}
	else{
		$faqs = App\faq::all();
		Cache::put('faqs', $faqs, 5);
		return Cache::get('faqs');
	}
    
});
Route::get('/customers',function(){
    $faker = Faker\Factory::create();

    $limit = 10;

    for ($i = 0; $i < $limit; $i++) {
        $faker->name . ', Email Address: ' . $faker->unique()->email . ', Contact No' . $faker->phoneNumber . '<br>';
    }
});
