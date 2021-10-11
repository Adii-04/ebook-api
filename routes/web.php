<?php

use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeUnit\FunctionUnit;
use App\Http\Controllers\AuthController;


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

 Route::get('/', function(){
     return view('welcome');
 });

// //return string
// Route::get('/me', function(){
//     return "Adi";
// });

// //return array (JSON)
// Route::get('/me', function(){
//     return ['Adi', 'KK4', 'rpl1'];
// });

// //return array(JSON)
// Route::get('/me', function(){
//     return[
//         'nama' => 'Adi',
//         'nis' => 3103119004,
//         'kelas'=> 'XII RPL 1',
//         'Nomor HP' => 82222206040
//     ];
// });

//return JSON
Route::get('/me', function(){
    return response()->json(
        [
            'nama' => 'Adi',
            'nis' => 3103119004,
            'gender' => 'laki-laki',
            'kelas'=> 'XII RPL 1',
            'Nomor HP' => 82222206040
        ]
        );
});

//Route function
Route::get('/back', function(){
    return redirect('/');
});

//route controller to AuthController
Route::get('/me',[AuthController::class, 'me']);