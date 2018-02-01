<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profissao extends Model
{
    protected $table = "profissoes";
    protected $fillable = ['prof_nome'];    
    protected $dates = ['deleted_at'];
}
