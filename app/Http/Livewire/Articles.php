<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Articles extends Component
{

    public $search = '';

    public function mount()
    {
        if(Auth::check()){
            $this->redirectRoute('dashboard');
        }
    }

    public function render()
    {
        return view('livewire.articles',[
            'articles' => Article::where(
                'title','like',"%{$this->search}%"
            )->latest()->get()
        ])->layout('layouts.guest');
    }
}
