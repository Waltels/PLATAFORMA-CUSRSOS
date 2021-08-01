<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;

class Searcharticle extends Component
{
    public $searcharticle;

    public function render()
    {
        return view('livewire.searcharticle');
    }

    public function getResultsarticlesProperty(){
        return Article::where('title','LIKE','%'.$this->searcharticle.'%')->where('status',3)->take(8)->get();
    }
}
