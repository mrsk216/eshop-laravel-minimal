<?php

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

new class extends Component
{
    use WithPagination;

    public $perPage = 12;
    public $search = '';

    public function loadMore()
    {
        $this->perPage += 12;
    }

    public function getProductProperty()
    {
        $query = Product::where('status', true)->where('quantity', '>', 0)->with('primaryImage', 'category');

        if(strlen($this->search) >= 2){
            $query->where(function($a){
                $a->where('name', 'like', '%' . $this->search . '%')->orWhere('brand', 'like', '%' . $this->search . '%');
            });
        }

        return $query->paginate($this->perPage);
    }

    public function render()
    {
        return view('components.⚡browse-product.browse-product');
    }
};
