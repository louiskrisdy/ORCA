<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Thread;

class SearchComponent extends Component
{
    public $searchQuery = '';
    public $results = [];

    public function updatedSearchQuery()
    {
        if (empty($this->searchQuery)) {
            $this->results = [];
        } else {
            $this->results = Thread::where('title', 'like', '%' . $this->searchQuery . '%')->get();
        }
    }

    public function render()
    {
        return view('livewire.search-component');
    }
}
