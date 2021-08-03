<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index(){

        $articles= Article::where('status', 2)->paginate();
        return view('admin.articles.index', compact('articles'));
    }

    public function show(Article $article){

       /* $this->authorize('revisionar', $article);*/
        return view('admin.articles.show', compact('article'));

       /* $this->authorize('revision', $article);
        return view('admin.courses.show', compact('course'));*/
    }

    public function approved(Article $article){


        /*$this->authorize('revision', $course);

        if (!$article->image) {
            return back()->with('info', 'No se puede publicar un curso que no este completo, revise toda la estructura que debe cumplir un curso antes de aprobarlo.');
        }*/
        $article->status = 3;
        $article->save();
        //enviar el correo electronico
       /* $mail = new ApprovedCourse($course);
        Mail::to($course->teacher->email)->send($mail);*/

        return redirect()->route('admin.articles.index')->with('info', 'El artículo que se reviso, se publico con éxito en el blog');
    }

    public function observation( Article $article){
        return view('admin.articles.observation', compact('article'));
    }

    public function reject(Request $request, Article $article){

        $article->obsarticle()->create($request->all());

        $request->validate([  
            'body' => 'required'
        ]);

        $article->status = 1;
        $article->save();

        /*$request->validate([
            'body' => 'required'
        ]);

        $artticle->observation()->create($request->all());

        $artticle->status = 1;
        $artticle->save();

        //enviar el correo electronico
        $mail = new RejectCourse($artticle);
        Mail::to($artticle->teacher->email)->send($mail);*/

        return redirect()->route('admin.articles.index')->with('info', 'El artículo se ha rechazado con éxito');
    }
}
