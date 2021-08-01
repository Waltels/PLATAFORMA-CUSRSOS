<?php

namespace App\Http\Livewire;

use App\Models\Article;
use App\Models\Carticle;
use Livewire\Component;

class ArticlesIndex extends Component
{

    public $carticle_id;

    public function render()
    {
        $carticles = Carticle::all();

        $articles = Article::where('status', 3)
                            ->carticle($this->carticle_id)
                            ->latest('id')
                            ->paginate(10);
        return view('livewire.articles-index', compact('articles', 'carticles'));
    }

    public function resetFilterscat(){
        $this->reset('carticle_id');
    }
}
