<div class="row">
    <div class="col-md-12 mb-3">
        <div class="row">
            <div class="col-md-12 mb-3">
                <div class="input-group">
                    <input type="text" class="form-control" wire:model.lazy="name" placeholder="Name" value="">
                    <div class="input-group-append">
                        {{-- <button type="button" class="btn btn-danger">Cancel</button> --}}
                        <button type="button" class="btn btn-primary" wire:click="submit">Save</button>
                    </div>
                </div>
                @error('name')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
    </div>
</div>