<?php

namespace App\Http\Livewire\Users;

use Livewire\Component;
use Livewire\WithPagination;

use App\User;

class Index extends Component
{
    use WithPagination;

    public $keyword = '';
    public $editUser;

    protected $listeners = [
        'created' => '$refresh',
        'updated' => 'closeEditForm'
    ];

    protected $updatesQueryString = ['keyword'];

    public function render()
    {
        $query = User::query();

        $query->when($this->keyword, function($qry) {
            $qry->where('name', 'like', '%'.$this->keyword.'%');
        });

        $query->orderByDesc('id');

        $users = $query->paginate();

        return view('livewire.users.index', [
            'users' => $users
        ]);
    }

    public function editUser($id)
    {
        $this->editUser = $id;
    }

    public function closeEditForm()
    {
        $this->editUser = null;
    }
}
