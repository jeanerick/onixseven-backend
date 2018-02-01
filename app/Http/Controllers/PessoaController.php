<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pessoa;

class PessoaController extends Controller
{
    public function index()
    {
        return Pessoa::all();
    }
 
    public function show($id)
    {
        return Pessoa::find($id);
    }

    public function store(Request $request)
    {
        return Pessoa::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $pessoa = Pessoa::findOrFail($id);
        $pessoa->update($request->all());

        return $pessoa;
    }

    public function delete(Request $request, $id)
    {
        $pessoa = Pessoa::findOrFail($id);
        $pessoa->delete();

        return 204;
    }
}

