<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jogo extends Model
{
    //
    protected $guarded=[];

    public function plataformas()
    {
        return $this->belongsToMany(Plataforma::class,"jogos_plataformas");
    }
}
