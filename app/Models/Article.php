<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'status'];

    const BORRADOR = 1;
    const REVISION = 2;
    const PUBLICADO = 3;


    //Query scopes

    public function scopeCarticle($query, $carticle_id){
        if($carticle_id){

            return $query->where('carticle_id', $carticle_id);

        }
    }
    
    public function getRouteKeyName()
    {
        return "slug";
    }

    //Relacion uno a uno

    public function obsarticle(){
        return $this->hasOne('App\Models\Obsarticle');
    }


    //Relacion uno a uno polimorfica

    public function img(){
        return $this->morphOne('App\Models\Img', 'imageable');
    }

    //Relacion uno a muchos inversa
    
    public function carticle(){
        return $this->belongsTo('App\Models\Carticle');
    }

}


