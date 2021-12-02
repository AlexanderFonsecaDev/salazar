<?php

namespace App\Http\Livewire\Admin;

use App\Models\Article;
use Livewire\Component;

class Dashboard extends Component
{
    public $search = '';

    public function render()
    {
        return view('livewire.admin.dashboard',[
            'articles' => Article::where(
                'title','like',"%{$this->search}%"
            )->latest()->get()
        ]);
    }
}
