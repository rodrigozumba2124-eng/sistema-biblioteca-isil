<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Venta;
use Illuminate\Http\Request;

class VentaController extends Controller
{
    public function index()
    {
        return Venta::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'cliente_id' => 'required|exists:clientes,id',
            'total' => 'required|numeric',
        ]);

        return Venta::create($request->all());
    }

    public function show(Venta $venta)
    {
        return $venta;
    }

    public function update(Request $request, Venta $venta)
    {
        $venta->update($request->all());
        return $venta;
    }

    public function destroy(Venta $venta)
    {
        $venta->delete();
        return response()->json(['mensaje' => 'Venta eliminada con éxito']);
    }
}