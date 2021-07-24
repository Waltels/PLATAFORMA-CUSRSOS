<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\Course;

class MiscursosCourses extends Component
{
    public function render()
    {
        
        $users = User::with('courses')->findOrFail(auth()->user()->id);
       /* dd($courses);*/
        return view('livewire.miscursos-courses', compact('users'));
        
    }


}
