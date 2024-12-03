<?php

namespace App\Livewire\Hotels;

use App\Models\Hotel;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;

class HotelCreate extends Component
{
    #[Title("Create Hotel")]

    #[Validate("required|min:3")]
    public $name;

    #[Validate("email")]
    public $email;

    #[Validate("required")]
    public $address;

    #[Validate("required")]
    public $phone;

    #[Validate("required|numeric")]
    public $stars;

    #[Validate("required")]
    public $check_in_time;
    #[Validate("required")]
    public $check_out_time;

    public function render()
    {
        return view('livewire.hotels.hotel-create');
    }

    public function create(){
        $this->validate();
        Hotel::create($this->all());
        session()->flash('successCreate', 'Hotel created successfully!');
        return $this->redirect("/hotels");
    }
}
