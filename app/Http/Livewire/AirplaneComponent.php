<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Airplane;

class AirplaneComponent extends Component
{

    public $aviones;
    
    public function render()
    {
        $dataAirplane = Airplane::all();
        return view('livewire.airplane', compact('dataAirplane'));
    }


    public function delete($id)
    {
        Airplane::find($id)->delete();
        session()->flash('message', 'Post Deleted Successfully.');
    }
}
