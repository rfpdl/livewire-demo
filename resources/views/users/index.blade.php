@extends('layouts.app')

@section('style')
<style>
li {
    list-style-type: none;
}
</style>
@endSection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" x-data="{ showCreateForm: false }">
                <div class="card-header">
                    <h2 class="mt-2 d-inline">
                        Users    
                    </h2>
                    <button class="btn btn-primary float-right d-inline" @click="showCreateForm = !showCreateForm">Add</button>
                </div>

                <div class="card-body">
                    @include('layouts._flash-message')
                    <div x-show.transition.slide.duration.1000="showCreateForm" @close-create-form.window="showCreateForm = false">
                        @livewire('users.create')
                    </div>
                    @livewire('users.index')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
