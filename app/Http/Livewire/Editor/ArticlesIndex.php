<?php

namespace App\Http\Livewire\Editor;

use Livewire\Component;
use App\Models\Article;

use Livewire\WithPagination;



class ArticlesIndex extends Component
{
    use WithPagination;
    public $searcharticle;
    public function render()
    {
        $articles = Article::where('title','LIKE','%'.$this->searcharticle.'%')
                            ->where('user_id', auth()->user()->id)
                            ->latest('id')
                            ->paginate(2);
        return view('livewire.editor.articles-index', compact('articles'));
    }
    
    public function limpiar_page(){
        $this->reset('page');
    }
}
