<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Student as Students;

class Student extends Component
{
    public $first_name;
    public $last_name;
    public $email;
    public $phone;

    public function resetInputFields()
    {

        $this->first_name = '';
        $this->last_name = '';
        $this->email = '';
        $this->phone = '';
    }

    public function store(){

       $data = $this->validate([

        'first_name' => 'required',

        'last_name' => 'required',

        'email' => 'required|email',

        'phone' => 'required|digits:11',

        ]);

        Students::create($data);

        session()->flash('message', 'Students added successfully');

        $this->resetInputFields();

        $this->emit('studentAdded');

    }

    public function render()
    {
        $students = Students::orderBy('id', 'DESC')->get();

        return view('livewire.student', compact('students'));
    }
}
