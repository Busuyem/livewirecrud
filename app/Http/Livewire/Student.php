<?php

namespace App\Http\Livewire;

use App\Models\Student as Students;
use Livewire\Component;

class Student extends Component
{
    public function render()
    {
        $students = Students::orderBy('id', 'DESC')->get();

        return view('livewire.student', compact('students'));
    }
}
