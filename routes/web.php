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
    return redirect('/inicio');
//    return view('home');
});

    if (Schema::hasTable('pages'))
        foreach (app(\ErpNET\Models\v1\Repositories\PageRepositoryEloquent::class)->all() as $item) {
            Route::get($item->rota, ['as'=>'pages.'.$item->rota, 'uses'=>'PageController@show']);
//            Route::get($item->rota, ['as'=>'pages.'.$item->rota, function () use ($item) {
//                return view('pages')->with(['pageData'=>$item]);
//            }]);
        }


Route::get('/home', ['as'=>'home', function () {
    return view('home');
}]);

Route::resource('/post', '\ErpNET\Models\v1\Controllers\PostController');
Route::resource('/page', '\ErpNET\Models\v1\Controllers\PageController');
Route::resource('/user', '\ErpNET\Models\v1\Controllers\UserController');

Auth::routes();

//Route::get('/home', 'HomeController@index');
