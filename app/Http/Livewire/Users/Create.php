<?php

namespace App\Http\Livewire\Users;

use Livewire\Component;

use App\User;

class Create extends Component
{
    public $name;

    public function render()
    {
        return view('livewire.users.create');
    }

    private function validateForm()
    {
        $this->validate([
            'name' => 'required|unique:users'
        ]);
    }

    public function submit()
    {
        $this->validateForm();        

        User::create([
            'name' => $this->name,
            'email' => strtolower($this->name).'@yahoo.com',
            'password' => bcrypt('password')
        ]);

        $this->reset();

        $this->emit('created');

        session()->flash('message', 'Successfully created user');

        $this->dispatchBrowserEvent('close-create-form');
    }

    public function updatedName()
    {
        $this->validateForm();
    }
}
