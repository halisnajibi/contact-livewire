<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Belajar extends Component
{
    public $nama = '';
    public $showPassword = '';
    public $message = '';
    public $keranjang = 0;
    public function render()
    {
        return view('livewire.belajar');
    }

    public function plus(){
        $this->keranjang = $this->keranjang + 1;
    }
    public function minus(){
        $this->keranjang = $this->keranjang - 1;
    }
}
