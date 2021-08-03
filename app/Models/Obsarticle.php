<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obsarticle extends Model
{
    use HasFactory;
    protected $fillable = ['body', 'article_id'];

    //Relacion uno a uno inversa

    public function article(){
        return $this->belongsTo('App\Models\Article');
    }
}
