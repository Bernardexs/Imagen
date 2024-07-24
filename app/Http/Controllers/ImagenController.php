<?php

namespace App\Http\Controllers;

use App\Models\Imagen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImagenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $persona=new Imagen();
        try {
            $image = $request->file('imagen');
            $file = time() . $image->getClientOriginalName();
            Storage::disk('personas')->put($file, file_get_contents($image)); 

            $persona->nombre=$request->nombre;
            $persona->img = $file;
            $persona->save();

        } catch (\Exception $e) {
            return response()->json(["error" => "Ha ocurrido un error: " . $e->getMessage()], 500);
        }

        return response()->json(["message" => 'Datos guardados correctamente']);

       
    return response()->json(["message"=>'datos guardados correctamente']);
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(Imagen $imagen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Imagen $imagen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Imagen $imagen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Imagen $imagen)
    {
        //
    }
}
