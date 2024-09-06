<?php

namespace App\Livewire;

use Livewire\Component;

class Todos extends Component
{
    public $todo = '';

    public $todos = [
        "moli",
        "abu",
        "jereng"
    ];

    public function add(){
        $this->todos[] = $this->todo;
    }

    public function render()
    {
        return view('livewire.todos');
    }
}
