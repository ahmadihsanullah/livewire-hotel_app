<?php

namespace App\Livewire\Categories;

use App\Models\Category as Categories;
use Livewire\Component;
use Livewire\WithPagination;

class Category extends Component
{
    use WithPagination;


    public function render()
    {
        // Dapatkan jumlah total kategori
        $totalCategories = Categories::count();

        // Paginasi berdasarkan jumlah kategori
        $categories = ($totalCategories > 50) ? Categories::paginate(10) : Categories::paginate(5);

        return view('livewire.categories.category',[
            'categories' =>$categories
            ]
        );
    }
}
