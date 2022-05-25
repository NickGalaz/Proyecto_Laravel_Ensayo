<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\AirplaneModel;
use Livewire\WithPagination;

class Airplane extends Component
{
    use WithPagination;

    public $view = 'create';


    // Disponibilizacion de variables para editar y crear, para las vistas del front
    public $name, $color, $model, $brand, $patent, $quantity, $date, $country;

    public function render()
    {
        $dataAirplane = AirplaneModel::orderBy('id', 'asc')->paginate(10);
        return view('livewire.airplane', compact('dataAirplane'));
    }


    // FUNCION CREAR
    public function save()
    {
        $this->validate([
            'name' => 'required',
            'model' => 'required',
            'brand' => 'required',
            'patent' => 'required',
            'quantity' => 'required',
            'date' => 'required',
            'country' => 'required'
        ]);
        AirplaneModel::create([
            'name' => $this->name,
            'color' => $this->color,
            'model' => $this->model,
            'brand' => $this->brand,
            'patent' => $this->patent,
            'quantity' => $this->quantity,
            'date' => $this->date,
            'country' => $this->country,
        ]);
        // RESETEA LOS INPUT
        $this->reset();
    }

    // FUNCION EDITAR GENERA VISTA DE LOS DATOS QUE SE MODIFICARAN EN LOS INPUT
    public function edit($id)
    {
        $airplane = AirplaneModel::find($id);
        $this->name = $airplane->name;
        $this->color = $airplane->color;
        $this->model = $airplane->model;
        $this->brand = $airplane->brand;
        $this->patent = $airplane->patent;
        $this->quantity = $airplane->quantity;
        $this->date = $airplane->date;
        $this->country = $airplane->country;
        $this->view = 'edit';
    }

    // FUNCION ACTUALIZAR
    public function update()
    {
        // VALIDANDO DATA
        $this->validate([
            'name' => 'required',
            'model' => 'required',
            'brand' => 'required',
            'patent' => 'required',
            'quantity' => 'required',
            'date' => 'required',
            'country' => 'required'
        ]);
        // REGISTRO QUE SE ACTUALIZARÁ A TRAVÉS DE ID
        $airplane = AirplaneModel::find($this->id);
        //  SE ESTÁ ACTUALIZANDO LA DATA
        $airplane->update([
            'name' => $this->name,
            'color' => $this->color,
            'model' => $this->model,
            'brand' => $this->brand,
            'patent' => $this->patent,
            'quantity' => $this->quantity,
            'date' => $this->date,
            'country' => $this->country,
        ]);
    }

    public function destroy($id)
    {
        if ($id) {
            $record = AirplaneModel::where('id', $id);
            $record->delete();
        }
    }
}
