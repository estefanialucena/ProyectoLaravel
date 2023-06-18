<?php

namespace App\Http\Controllers;

use App\Models\Cancion;
use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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

    public function categoryFilter($categoriaId){
        $categoria = Categoria::find($categoriaId);
        // dd($categoria);
        $canciones = $categoria->canciones;
        $collection = collect($canciones);

        //Paginar una colección de datos
        $perPage = 5;
        $page = request()->get('page', 1);
        $paginator = new \Illuminate\Pagination\LengthAwarePaginator(
            $collection->forPage($page, $perPage),
            $collection->count(),
            $perPage,
            $page,
            ['path' => request()->url(), 'query' => request()->query()]
        );
        return view('cancion.index', ["canciones"=>$paginator]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cancione = new Cancion();
        $categorias = Categoria::all(); //Consulta en la tabla Categoria
        return view('cancion.create', compact('cancione', 'categorias'));
    }

    public function store(Request $request){
        DB::beginTransaction();
        try {
            $cancion=new Cancion();
            $cancion->categoria_id = $request->categoria;
            $cancion->titulo = $request->titulo;
            $cancion->user_id = Auth::id();
            $cancion->save();
            DB::commit();
            return redirect()->route('canciones.index');
        } catch (\Throwable $e) {
            DB::rollBack();
            return redirect()->route('canciones.index');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    // {
    //     // request()->validate(Cancion::$rules);

    //     $cancione = Cancion::create($request->all());

    //     return redirect()->route('canciones.index')
    //         ->with('success', 'Cancione created successfully.');
    // }

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
        $cancion = Cancion::find($id);
        $categorias = Categoria::all(); //Consulta en la tabla Categoria
        return view('cancion.edit', compact('cancion', 'categorias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Cancione $cancione
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cancion $cancion)
    {
        //Try catch para evitar errores con esto:
        DB::beginTransaction();
        try {
            $cancion->titulo = $request->titulo;
            $cancion->categoria_id = $request->categoria;
            $cancion->user_id = Auth::id();
            $cancion->save();
            DB::commit();
            return redirect()->route('canciones.index')
            ->with('success', 'Canción actualizada correctamente');
        } catch (\Throwable $e) {
            //Se deshacen los cambios, para evitar errores en la BD
            DB::rollBack();
            return redirect()->route('canciones.index')
            ->with('error', 'Ha ocurrido un error');
        }
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
