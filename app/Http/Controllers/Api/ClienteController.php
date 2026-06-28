<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Mostrar todos los clientes
        return Cliente::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Guardar un nuevo cliente
        $request->validate([
            'nombre' => 'required',
            'email' => 'required|email|unique:clientes',
        ]);

        return Cliente::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(Cliente $cliente)
    {
        // Mostrar un cliente específico
        return $cliente;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cliente $cliente)
    {
        // Actualizar un cliente
        $cliente->update($request->all());
        return $cliente;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cliente $cliente)
    {
        // Eliminar un cliente
        $cliente->delete();
        return response()->json(['mensaje' => 'Cliente eliminado con éxito']);
    }
}