<div>
    @extends('layouts.master')
    @push('css_livewire')
        @livewireStyles
    @endpush
    
    @section('content')
        <div class="container ">
           <div class="row">
            <div class="col-7 mx-auto">
            <div class="card>
                    <div class="card-header"><h5>Belajar CRUD Dengan Livewire</h5></div>
                    <div class="card-body">
                  {{-- @if ($statusUpdate)
                    @else
                    @endif --}}
                    @livewire('user-edit')
                  {{-- @livewire('user-create') --}}
                        <hr>
                        @livewire('user-table')
                    </div>
                </div>
            </div>
           </div>
        </div>
    @endsection
    
    @push('script_livewire')
        @livewireScripts
    @endpush
</div>
