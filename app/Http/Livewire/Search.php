<?php

namespace App\Http\Livewire;

use App\Models\Repo;
use Livewire\Component;

class Search extends Component
{
    public $search = '';

    public function render()
    {
        $repos = $this->search ? Repo::search($this->search)->get() : collect();

        return view(
            'livewire.search',
            ['repos' => $repos]
        );
    }
}
