<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ProductImport;
use App\Models\Product;

class ProductController extends Controller
{

    public function index()
    {

        $products = Product::all();
        // Pasar los productos a la vista
        return view('import_product.index', compact('products'));
    }

    public function create()
    {
        return view('import_product.create');
    }
    public function store(Request $request)
    {
        // Verifica si el archivo está presente
        if ($request->hasFile('inport_file')) {
            $file = $request->file('inport_file');

            // Importar el archivo
            Excel::import(new ProductImport(), $file);

            // Redirigir con mensaje de éxito
            return redirect()->route('Product.index')->with('success', 'Archivo subido con éxito');
        } else {
            // Redirigir con mensaje de error si no se seleccionó archivo
            return redirect()->back()->with('error', 'No se ha seleccionado ningún archivo');
        }
    }
}
