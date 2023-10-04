<div>
  <div class="container mt-5">
    {{-- <input type="text" class="form-control" wire:model="nama"> --}}
    {{-- <input type="radio" wire:model="nama" value="laki">laki
    <input type="radio" wire:model="nama" value="perempuan">perempuan --}}
    {{-- <select name="" id="" class="form-select" wire:model="nama">
        <option value="">--</option>
        <option value="laki">laki</option>
        <option value="perempuan">perempuan</option>
    </select>
    <h1>nama saya adalah {{ $nama }}</h1> --}}
    {{-- @if ($showPassword == 'show')
    <input type="text" class="form-control" wire:model="nama">
    @else
    <input type="password" class="form-control" wire:model="nama">
    @endif
    <input type="checkbox" value="show" wire:model="showPassword"> --}}
    {{-- <input type="text" class="form-control" wire:model.lazy="message">
    <h1>{{ $message }}</h1> --}}

    <input type="number" class="form-control" wire:model="keranjang">
    <button class="btn btn-primary" wire:click='plus'>+ plus</button>
@if ($keranjang > 0)
    
<button class="btn btn-danger" wire:click='minus'>- minus</button>
@endif
  </div>
</div>
