<?php

namespace App\Http\Controllers;

use App\Models\Cancion;
use App\Models\Categoria;
use Illuminate\Http\Request;

/**
 * Class CancioneController
 * @package App\Http\Controllers
 */
class CancioneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $canciones = Cancion::paginate();

        return view('cancion.index', compact('canciones'))
            ->with('i', (request()->input('page', 1) - 1) * $canciones->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cancione = new Cancion();
        $categorias = Categoria::pluck('nombre', 'id'); //Consulta en la tabla Categoria
        return view('cancion.create', compact('cancione', 'categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // request()->validate(Cancion::$rules);

        $cancione = Cancion::create($request->all());

        return redirect()->route('canciones.index')
            ->with('success', 'Cancione created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cancione = Cancion::find($id);

        return view('cancion.show', compact('cancione'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cancione = Cancion::find($id);
        $categorias = Categoria::pluck('nombre', 'id'); //Consulta en la tabla Categoria
        return view('cancion.edit', compact('cancione', 'categorias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Cancione $cancione
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cancion $cancione)
    {
        // request()->validate(Cancion::$rules);

        $cancione->update($request->all());

        return redirect()->route('canciones.index')
            ->with('success', 'Cancione updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $cancione = Cancion::find($id)->delete();

        return redirect()->route('canciones.index')
            ->with('success', 'Cancione deleted successfully');
    }
}
