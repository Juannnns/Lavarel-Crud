<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index()
    {
        $productos = [
            ['id' => 1, 'nombre' => 'Producto 1', 'precio' => 100],
            ['id' => 2, 'nombre' => 'Producto 2', 'precio' => 200],
            ['id' => 3, 'nombre' => 'Producto 3', 'precio' => 300],
        ];
        return view('productos.index', ['productos' => $productos]);
    }

    public function show($id)
    {
        return "aca se va a mostrar el producto con el ID: $id";
    }
    
    public function create()
    {
        return view('productos.create');
    }

    public function edit($id)
    {
        return "aca se va a mostrar el formulario para editar el producto con el ID: $id";
    }

    public function store(Request $request)
    {
        return 'aca se va a ejecutar la accion de crear un proucto';
    }

    public function update(Request $request, $id)
    {
        return 'aca se va a ejecutar la acción de actualizar un producto';
    }

    public function destroy($id)
    {
        return 'aca se va a ejecutar la acción de eliminar un producto';
    }
}
