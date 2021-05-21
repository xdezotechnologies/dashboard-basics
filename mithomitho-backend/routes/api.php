<?php

use App\Http\Controllers\DmTableController;
use App\Models\dm_table;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


// Route::resource('/test',function (Request $request){
//     $dm_table = new dm_table();
//     $dm_table->restro_id = 2;
//     $dm_table->name= "Tablesaa";
//     $dm_table->no= "5";
//     $dm_table->status= 1;
//     $dm_table->save();
//     return ["data"=>$dm_table,"success"=>true];
// });
