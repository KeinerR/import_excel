<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {


        $empleados = Empleado::all();
        return view('empleado.index', compact('empleados'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('empleado.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'address' => 'required|string|max:255',
            'cellphone' => 'required|string|max:20', // Valida el teléfono
        ]);

        // dd($validatedData);

        $empleado = Empleado::create([

            'name' => $validatedData['name'],
            'last_name' => $validatedData['last_name'],
        ]);

        $empleado->telefono()->create([
            'cellphone' => $validatedData['cellphone']

        ]);




        $empleado->email()->create([
            'email' => $validatedData['email']

        ]);
        $empleado->direcciones()->create([
            'address' => $validatedData['address']

        ]);

        return redirect()->route('Empleado.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Empleado $empleado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Empleado $empleado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Empleado $empleado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Empleado $empleado)
    {
        //
    }
}
