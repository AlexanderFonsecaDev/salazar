<?php

namespace App\Http\Livewire\Guest;

use Livewire\Component;

class Card extends Component
{
    public function render()
    {
        return view('livewire.guest.card')->layout('layouts.guest');
    }
}
