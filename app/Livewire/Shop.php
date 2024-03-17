<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use Livewire\WithPagination;

class Shop extends Component
{
    use WithPagination;

    public function render()
    {
        $products = Product::paginate(10);
        $categories = Category::all();
        return view('livewire.shop', compact('products', 'categories'));
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('shop.show', compact('product'));
    }
}
