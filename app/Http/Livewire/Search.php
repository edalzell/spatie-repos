<?php

namespace App\Http\Livewire;

use App\Models\Repo;
use Livewire\Component;

class Search extends Component
{
    public $search = '';

    public function render()
    {
        return view(
            'livewire.search',
            ['repos' => Repo::search($this->search)->get()]
        );
    }
}
