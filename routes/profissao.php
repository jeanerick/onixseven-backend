<?php

use Illuminate\Http\Request;
Use App\Profissao;
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

 
Route::get('profissao', function() {
    // If the Content-Type and Accept headers are set to 'application/json', 
    // this will return a JSON structure. This will be cleaned up later.
    return Profissao::all();
});
 
Route::get('profissao/{id}', function($id) {
    return Profissao::find($id);
});

Route::post('profissao', function(Request $request) {
    return Profissao::create($request->all);
});

Route::put('profissao/{id}', function(Request $request, $id) {
    $article = Profissao::findOrFail($id);
    $article->update($request->all());

    return $article;
});

Route::delete('profissao/{id}', function($id) {
    Profissao::find($id)->delete();

    return 204;
});