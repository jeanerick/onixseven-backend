<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profissao;

class ProfissaoController extends Controller
{
    public function index()
    {
        return Profissao::all();
    }
 
    public function show($id)
    {
        return Profissao::find($id);
    }

    public function store(Request $request)
    {
        return Profissao::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $profissao = Profissao::findOrFail($id);
        $profissao->update($request->all());

        return $profissao;
    }

    public function delete(Request $request, $id)
    {
        $profissao = Profissao::findOrFail($id);
        $profissao->delete();

        return 204;
    }
}
}
