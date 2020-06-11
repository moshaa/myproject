<?php


/*|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|*/



route::get('/',function() {

    $date=[];
    $data['id']=5;
    $data['name']='ahmed emam';
    return view('welcome',['b7bek'=>$data
    ]);
});
/*
Route::prefix('user')->group('/', function () {
    route::get('show','usercontroller@showusername');
    route::delete('delete','usercontroller@showusername');
    route::get('edit','usercontroller@showusername';
    route::put('update','usercontroller@showusername');
});

route::group(['prefix' => 'users','middleware' =>'auth'],function(){
    //set of routes

    route::get('/',function(){
        return'work';
    });
        route::get('show','usercontroller@showusername');
        route::delete('delete','usercontroller@showusername');
        route::get('edit','usercontroller@showusername');
        route::put('update','usercontroller@showusername');
});


route::get('check',function(){
    return'middleware';

}) ->middleware('auth');
return'with auth';


route::get('forperson',function(){
    return'with auth';
}) -> middleware('auth');

        route::get('offers/show','usercontroller@showusername');
        route::delete('offers/delete','usercontroller@showusername');
        route::get('offers/edit','usercontroller@showusername');
        route::put('offers/update','usercontroller@showusername');




route::group(['namespace'=>'Admin'],function(){          
route::get('second','Secondcontroller@showstring');
});


route::get('users', 'usercontroller@index' )->middleware('auth')

route::group(['middleware' => 'auth','middleware' =>'auth'],function(){
    route::get('users','userscontroller@index');
});
*/

route::resource('News','Newscontroller');

route::get('yassmine',function(){
    return view('landing');
});

/*
// route name

route::namespace('front')->group(function(){

        // all route only access controller or methodin folder name front
    // route::get('users')
   }); 
   */





Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
