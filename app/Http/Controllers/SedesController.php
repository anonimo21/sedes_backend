<?php

namespace App\Http\Controllers;

use App\Models\Sede;
use Illuminate\Http\Request;

class SedesController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    //Metodo para listar las sedes, y que contiene un arreglo de objetos con toda la informacion, simulando una tabla en BD
    public function index()
    {
        // Crear un arreglo de objetos
        $sedes = [
            (object) [
                'code' => 1,
                'name' => 'sede uno',
                'foto' => 'https://upload.wikimedia.org/wikipedia/commons/a/a3/Image-not-found.png',
                'creationDate' => '15-01-2024'
            ],
            (object) [
                'code' => 2,
                'name' => 'sede dos',
                'foto' => 'https://upload.wikimedia.org/wikipedia/commons/a/a3/Image-not-found.png',
                'creationDate' => '15-01-2024'
            ],
            (object) [
                'code' => 3,
                'name' => 'sede tres',
                'foto' => 'https://upload.wikimedia.org/wikipedia/commons/a/a3/Image-not-found.png',
                'creationDate' => '15-01-2024'
            ],
            (object) [
                'code' => 4,
                'name' => 'sede cuatro',
                'foto' => 'https://upload.wikimedia.org/wikipedia/commons/a/a3/Image-not-found.png',
                'creationDate' => '15-01-2024'
            ],
            (object) [
                'code' => 5,
                'name' => 'sede cinco',
                'foto' => 'https://upload.wikimedia.org/wikipedia/commons/a/a3/Image-not-found.png',
                'creationDate' => '15-01-2024'
            ]
        ];

        return compact('sedes');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
