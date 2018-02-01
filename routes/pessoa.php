<?php

use Illuminate\Http\Request;
Use App\Pessoa;
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

 
Route::get('pessoa', function() {
    // If the Content-Type and Accept headers are set to 'application/json', 
    // this will return a JSON structure. This will be cleaned up later.
    return Pessoa::all();
});
 
Route::get('pessoa/{id}', function($id) {
    return Pessoa::find($id);
});

Route::post('pessoa', function(Request $request) {
    return Pessoa::create($request->all);
});

Route::put('pessoa/{id}', function(Request $request, $id) {
    $article = Pessoa::findOrFail($id);
    $article->update($request->all());

    return $article;
});

Route::delete('pessoa/{id}', function($id) {
    Pessoa::find($id)->delete();

    return 204;
});