<div class="row">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-12">
                <div class="input-group">
                    <input type="text" class="form-control" wire:model.lazy="name" placeholder="Name" value="{{ $user->name }}">
                    <div class="input-group-append">
                        {{-- <button type="button" class="btn btn-danger">Cancel</button> --}}
                        <button type="button" class="btn btn-primary" wire:click="submit">Update</button>
                    </div>
                </div>
                @error('name')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
    </div>
</div>