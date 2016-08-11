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

$locale = Request::segment(1);

if (in_array($locale, Config::get('app.available_locales'))) {
    \App::setLocale($locale);
} else {
    $locale = null;
}


Route::group(['prefix' => $locale], function () {

    Route::get(Lang::get('route.about'), function () {

        return view('pages.about')->with('route', 'route.about');
    });

    Route::get(Lang::get('route.sauna') . '/{type?}',
        function ($type = "garine") {

            return view('pages.sauna', ['sauna' => true, 'route' => 'route.sauna', 'saunaType'=>$type]);
        }
    );

    Route::get(Lang::get('route.contacts'), function() {
        return view('pages.contacts')->with('route', 'route.contacts');
    });

});




