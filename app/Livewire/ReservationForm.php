<?php

namespace App\Livewire;

use App\Models\Reservation;
use Livewire\Component;

class ReservationForm extends Component
{
    public $name;

    public $phone_number;

    public $email;

    public $number_of_people;

    public $reservation_date;

    public function saveReservation()
    {
        $this->validate([
            'name' => 'required',
            'phone_number' => 'required',
            'email' => 'required|email',
            'number_of_people' => 'required|numeric',
            'reservation_date' => 'required|date',
        ]);

        Reservation::create([
            'name' => $this->name,
            'phone_number' => $this->phone_number,
            'email' => $this->email,
            'number_of_people' => $this->number_of_people,
            'reservation_date' => $this->reservation_date,
        ]);

        session()->flash('message', 'Reservation saved successfully.');

        $this->reset();
    }

    public function render()
    {
        return view('livewire.reservation-form');
    }
}
