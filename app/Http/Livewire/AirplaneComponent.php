<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Airplane;

class AirplaneComponent extends Component
{

    public function render()
    {
        $dataAirplane = Airplane::all();
        return view('livewire.airplane', compact('dataAirplane'));
    }
}
