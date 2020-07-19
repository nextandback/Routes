<?php

use Illuminate\Support\Facades\Route;

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

Route::get('ilk',function (){
    return view('welcome');
});

Route::get('ilk',function (){
   return "İlk örnek";
})->name('deneme');

Route::get('uc',function (){
    $url = \route('deneme');
    return $url;
});

Route::get('yazilar/{id?}/{title?}',function ($id="",$title=""){
    return 'Yazilar'.$id.' '.$title;
});

Route::group(['prefix'=>'admin'],function(){
    Route::get('yönetim',function (){
       return "Yönetim";
    });
    Route::get('yetkiler',function (){
       return "Yetkiler";
    });
});

Route::middleware(['auth'])->group(function (){
    Route::get('gizli',function (){
       return "Gizli";
    });
});

Route::get('/anasayfa',function (){
    return view('anasayfa');
});

Route::get('iletisim',function (){
   return view('iletisim');
});

Route::get('goster','AdminController@goster');

//Route::get('pages','PageController@index');
Route::get('pages/create','PageController@create');

Route::resource('pages','PageController');

Route::get('yenisayfa/{sayfa?}','PageController@deneme');

Route::get('aktar','PageController@VeriAktarma');
