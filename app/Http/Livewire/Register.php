<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Register extends Component
{
    public $name;
    public $email;
    public $password;
    public $password_confirmation;

    public function render()
    {
        return view('livewire.register');
    }

    protected $rules = [
        'name' => ['required','min:2'],
        'email' => ['email','required'],
        'password' => ['required','min:8','confirmed']
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submitForm()
    {
        $this->validate();

        User::create([
           'name' => $this->name,
           'email' => $this->email,
           'password' => Hash::make($this->password),
        ]);

        $this->resetForm();

        session()->flash('success', 'Usuário cadastrado!');
    }

    private function resetForm()
    {
        $this->name = '';
        $this->email = '';
        $this->password = '';
        $this->password_confirmation = '';
    }
}
