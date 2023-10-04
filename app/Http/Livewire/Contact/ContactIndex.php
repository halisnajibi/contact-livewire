<?php

namespace App\Http\Livewire\Contact;

use App\Models\Contact;
use Livewire\Component;
use Livewire\WithPagination;

class ContactIndex extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $search = '';
    public $paginate = 5;
    public $statusUpdate = false;
    protected $listeners = [
        'storedContact' => 'render',
        'updatedContact' => 'renderUlang',
        'edit' => 'statusUpdate',
    ];
    public function render()
    {
        return view('livewire.contact.contact-index', [
            'contacts' => Contact::where('name','like','%'.$this->search.'%')->paginate($this->paginate)
            // 'contacts' => Contact::all()
        ])->layout('layouts.app-livewire');
      
    }

    public function getContactByID($id)
    {
        $this->statusUpdate = true;
        $contact = Contact::find($id);
       $this->emit('getContactByID',$contact);
    }

    public function deleteContact($id){
        Contact::destroy($id);
        $this->renderUlang();
    }

    public function renderUlang(){
        $this->statusUpdate = false;
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }
}
