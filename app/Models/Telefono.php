<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Telefono extends Model
{
    use HasFactory;

    protected $fillable = [

        'cellphone'
    ];

    public function empleado()
    {
        return $this->belongsTo(Empleado::class);
    }
}
