<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

class Test extends Component
{
    #[Title('test')]

    public $name = "test livewire";

    public function render()
    {
        return view('livewire.test');
    }
}
