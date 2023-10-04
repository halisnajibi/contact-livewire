<div>
    @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Selamat!</strong> {{ session('success') }}.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif
    <form wire:submit.prevent="update">
        <div class="mb-3">
            <input type="hidden" name="id" wire:model='id'>
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control @error('name')is-invalid @enderror() "
                id="name" placeholder="Name" name="name" wire:model='name'>
            @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email</label>
            <input type="email" class="form-control @error('email')is-invalid @enderror()"
                id="exampleFormControlInput1" placeholder="name@example.com" name="email"
                wire:model='email'>
            @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="pw" class="form-label">Password</label>
            <input type="password" class="form-control @error('password')is-invalid @enderror()"
                id="pw" name="password" wire:model='password'>
            @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <button class="btn btn-primary" type="submit">Save</button>
    </form>
</div>
