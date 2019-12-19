<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plataforma extends Model
{
    //
    protected $guarded=[];
    
    public function jogos()
    {
        return $this->belongsToMany(Jogo::class,"jogos_plataformas");
    }
}
