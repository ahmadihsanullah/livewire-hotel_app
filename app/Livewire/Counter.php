<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $title = 'Counter APP';
    
    public $count = 1;
 
    public function increment()
    {
        $this->count++;
    }
 
    public function decrement()
    {
        $this->count--;
    }
 
    public function render()
    {
        return view('livewire.counter');
    }
}
