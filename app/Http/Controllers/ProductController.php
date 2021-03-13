<?php

namespace App\Http\Controllers;

use App\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index(){
        $data = Producto::get();
        return view('productos', compact('data'));
    }

    public function create() {
        return view('producto_crear');
    }

    public function guardar(Request $request) {
        $data = new Producto();
        $data->fill($request->all());

        // sin request fill
        // $data->nombre = $request->nombre;
        // $data->marca = $request->marca;
        // $data->precio = $request->precio;
        // $data->activo = $request->activo;
        // $data->vencimiento = $request->vencimiento;
        $data->save();

        return redirect()->back();
    }

    public function edit(Request $request, $id) {
        $data = Producto::find($id);

        return view('product_edit', compact('data'));
    }

    public function actualizar(Request $request, $id) {
        $data = Producto::find($id);
        $data->fill($request->all());
        $data->save();

        return redirect()->back();
    }

    public function delete($id){
        $data = Producto::find($id);
        $data->delete();

        return redirect()->back();
    }

}
