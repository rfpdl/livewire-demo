<?php

namespace App\Http\Livewire\Users;

use Livewire\Component;

use App\User;

class Edit extends Component
{
    public $name;
    public $user;

    public function mount(User $user)
    {
        $this->user = $user;
        $this->name = $user->name;
    }

    public function submit()
    {
        $this->user->name = $this->name;
        $this->user->save();

        $this->emit('updated');

        // session()->flash('message', 'Successfully updated user');
        session()->flash('message', 'Successfully updated user');
    }

    public function render()
    {
        return view('livewire.users.edit');
    }
}
