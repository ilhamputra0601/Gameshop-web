<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;

class Search extends Component
{
    public $search;

    public function render()
    {
        $results = [];
        if (!empty($this->search)) {
        $results = Product::where('title', 'like', '%' . $this->search. '%')->get();
    }
        return view('livewire.search',compact('results'));
    }
}
