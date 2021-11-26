<?php

namespace App\Http\Livewire\Guest;

use Livewire\Component;

class TableContents extends Component
{
    public function render()
    {
        return view('livewire.guest.table-contents')->layout('layouts.guest');
    }
}
