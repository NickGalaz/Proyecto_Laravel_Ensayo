<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AirplaneModel extends Model
{
    use HasFactory;
    protected $table='airplanes';
    protected $primaryKey='id';

    protected $fillable = [
        'name',
        'color',
        'model',
        'brand',
        'patent',
        'quantity',
        'date',
        'country'
    ];
}
