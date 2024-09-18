<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Direccion extends Model
{
    use HasFactory;


    protected $fillable = [

        'address'
    ];


    public function empleado()
    {
        return $this->belongsTo(Empleado::class);
    }
}
