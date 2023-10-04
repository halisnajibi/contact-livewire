<div>
    <div class="container my-5">
        <div class="row">
            <div class="col-7 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h5>Livewire Full-Page Components</h5>
                    </div>
                    <div class="card-body">
                        @if ($statusUpdate)
                            @livewire('contact.contact-edit')
                        @else
                            @livewire('contact.contact-create')
                        @endif
                        <hr>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="search" wire:model='search'>
                        </div>
                        <div class="row mb-2">
                            <div class="col-2">
                                <select name="" id="" wire:model='paginate' class="form-select">
                                    <option value="5">5</option>
                                    <option value="10">10</option>
                                    <option value="15">15</option>
                                </select>
                            </div>
                        </div>
                        <table class="table">
                            <thead class="thead-dark table-dark">
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($contacts as $index=>$contact)
                                    <tr>
                                        <td>{{ $contacts->firstItem() + $index }}</td>
{{-- <td>{{ $loop->iteration }}</td> --}}
                                        <td>{{ $contact->name }}</td>
                                        <td>{{ $contact->email }}</td>
                                        <td>{{ $contact->phone }}</td>
                                        <td>
                                            <button class="btn btn-sm btn-warning mb-2"
                                                wire:click='getContactByID({{ $contact->id }})'>Edit</button>
                                            <button class="btn btn-sm btn-danger" onclick="return confirm('yakin')"
                                                wire:click='deleteContact({{ $contact->id }})'>Delete</button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $contacts->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
