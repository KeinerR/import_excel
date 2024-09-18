<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Empleado extends Model
{
    use HasFactory;

    protected $fillable = [

        'name',
        'last_name'
    ];




    public function telefono(): HasMany
    {
        return $this->hasMany(Telefono::class);
    }
    public function direcciones()
    {
        return $this->hasMany(Direccion::class);
    }
    public function email(): HasMany
    {
        return $this->hasMany(Email::class);
    }
    public function proyectos()
    {
        return $this->belongsToMany(Proyecto::class, 'empleado_proyecto');
    }
}
