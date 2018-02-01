<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    protected $fillable = ['pes_nome', 'pes_data_nascimento', 
    'pes_cpf', 'pes_telefone', 'pes_observacoes','prof_id'];
    //
    protected $dates = ['deleted_at'];
}
