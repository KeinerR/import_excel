<?php

namespace App\Http\Controllers;

use App\Imports\MarcasImport;
use App\Models\Marcas;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class MarcasController extends Controller
{


    public function index()
    {
        $marcas = Marcas::paginate(10);

        return view('marca.index', compact('marcas'));
    }

    public function store(Request $request)
    {

        $file = $request->file('file_marca');
        Excel::import(new MarcasImport(), $file);

        return redirect()->route('Marcas.index')->with('success', 'Archivo subido con éxito');
    }
}
