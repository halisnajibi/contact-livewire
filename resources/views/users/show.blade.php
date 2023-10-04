@extends('layouts.master')
@section('content')
    <div class="container">
        <h1>Belajar CRUD Dengan Livewire</h1>
        <a href="{{ route('users') }}" class="my-3">kembali</a>
        <div class="mt-3">
            <div class="row">
                <div class="col-md-7">
                    <div class="card" style="width: 18rem;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                          <p class="card-text">{{ $user->name }}</p>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
@endsection