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
    return view('home');
})->name('home');

Route::get('/action/{name?}', [
    'uses'=>'NiceActionController@getNiceAction',
    'as'=>'niceaction'
]);


//Route::get('/greet/{name?}', function ($name=null) {
//    return view('actions.greet', ['name'=>$name]);
//})->name('greet');
//
//Route::get('/hug', function () {
//    return view('actions.hug');
//})->name('hug');
//
//Route::get('/kiss', function () {
//    return view('actions.kiss');
//})->name('kiss');
//
//
Route::post('/',[
    'uses'=>'NiceActionController@postNiceAction',
    'as'=>'benice'
]);
//Route::post('/benice', function(\Illuminate\Http\Request $request){
//    if(isset($request['action'])&& $request['name']){
//        if(strlen($request['name'])>0){
//            return view('actions.nice', ['action'=>$request['action'], 'name'=>$request['name']]);
//        }
//        return redirect()->back();
//    }
//    return redirect()->back();
//})->name('benice');


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

Route::group(['middleware' => ['web']], function () {
    //
});
