<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index()
    {
        return 'aca se van a mostrar todos los productos';
    }

    public function show($id)
    {
        return "aca se va a mostrar el producto con el ID: $id";
    }
}
