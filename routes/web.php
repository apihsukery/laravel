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

Route::get('ID/{id}',function($id){
   echo 'ID: '.$id;
});

Route::get('role',[
   'middleware' => 'Role:Programmer',
   'uses' => 'TestController@index',
]);

Route::get('terminate',[
   'middleware' => 'terminate',
   'uses' => 'ABCControl@index',
]);

Route::get('profile', [
   'middleware' => 'auth',
   'uses' => 'UserController@showProfile'
]);

Route::get('/usercontroller/path',[
   'middleware' => 'First',
   'uses' => 'UserController@showPath'
]);

Route::resource('my','MyController');

class MyClass{
   public $foo = 'bar';
}
Route::get('/myclass','ImplicitController@index');

Route::get('/foo/bar','UriController@index');

Route::get('/register',function(){
   return view('register'); //panggil file view
});
Route::post('/userRegister',array('uses'=>'UserRegistration@postRegister'));

Route::get('test', function(){
   return view('test');
});
Route::get('/test2', function(){
   return view('test2');
});

Route::get('blade', function () {
   return view('page',array('name' => 'Virat Gandhi'));
});


Route::get('insert','insertStudent@insertform');
Route::post('create','insertStudent@insert');

?>