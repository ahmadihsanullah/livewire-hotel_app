<?php

namespace App\Livewire\Hotels;

use App\Models\Hotel;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;

class HotelEdit extends Component
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

    public $hotel;

    public function mount($id){
        $this->hotel = Hotel::find($id);
        $this->name = $this->hotel->name;
        $this->email = $this->hotel->email;
        $this->address = $this->hotel->address;
        $this->phone = $this->hotel->phone;
        $this->stars = $this->hotel->stars;
        $this->check_in_time = $this->hotel->check_in_time;
        $this->check_out_time = $this->hotel->check_out_time;
    }

    public function render()
    {
        return view('livewire.hotels.hotel-edit');
    }

    public function update(){
        $this->validate();
        $this->hotel->update($this->all());
         // Set flash message ke session
        session()->flash('successEdit', 'Hotel updated successfully!');
        return $this->redirect("/hotels", navigate:true);
    }
}
