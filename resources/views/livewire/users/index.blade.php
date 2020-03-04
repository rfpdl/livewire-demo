<div>
    <div class="row">
        <div class="col-md-12 mb-3">
            <input type="text" class="form-control" wire:model="keyword" placeholder="Search...">
        </div>
    </div>
    {{-- <div wire:loading class="spinner-border" role="status">
        <span class="sr-only">Loading...</span>
    </div> --}}
    <div class="row">
        <div class="col-md-12 mb-3">
            @if($users->count() > 0)
            <ul class="list px-0">
                @foreach($users as $user)
                <li class="mb-3">
                    @if($editUser == $user->id)
                    @livewire('users.edit', [
                        'user' => $user
                    ])
                    @else
                    <button class="btn btn-primary" wire:click="editUser({{$user->id}})">Edit</button>  {{ $user->name }}
                    @endif
                </li>
                @endforeach
            </ul>
            @else
            <div class="alert alert-info">No result</div>
            @endif
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            {!! $users->links() !!}
        </div>
    </div>
</div>
