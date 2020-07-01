<?php

namespace App\Http\Controllers;
use App\Productos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function __construct()
    {
        $this->middleware('auth')->except('create','store');
    }

    public function index(Request $request)
    {
        //
        $request->user()->authorizeRoles(['admin','user']);

        $productos['productos']=Productos::paginate();
        return view('productos.index', $productos);

    }
    public function search(Request $request)
    {

        return view('productos.index',[
            'productos'=>Productos::name($request->get('name'))
            ->paginate(6)
            ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('productos.create', ['producto' => new Productos]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(
            [
                'name'=>'required',
                'precio'=>'required|numeric',
                'stock'=>'required|numeric',
                'tipo'=>'required|in:accesorios,ropa,comida,juguetes',
                'foto'=>'required'
            ],[
                'tipo.in'=>'Debe elegir una opcion'
            ]
        );

        $productos=request()->except('_token');

        if($request->hasFile('foto'))
        {
            $productos['foto']=$request->file('foto')->store('uploads','public');
        }

        Productos::insert($productos);


        return redirect()->route('productos.index')->with('status','El Producto se guardo Correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

        return view ('productos.show', [
            'productos' => Productos::findOrfail($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {
        //
        $request->user()->authorizeRoles(['admin']);



        $producto=Productos::FindOrFail($id);
        return view('productos.edit', compact('producto'));


    }

    public function update(Request $request, $id)
    {
        //
        $productos=request()->except(['_token','_method']);

        if($request->hasFile('foto'))
        {
            $producto=Productos::FindOrFail($id);
            Storage::delete('public/'. $producto->foto);
            $productos['foto']=$request->file('foto')->store('uploads','public');
        }
        Productos::where('id', '=',$id)->update($productos);
        $productos = Productos::FindOrFail($id);
        return view('productos.show', compact('productos'));
    }

    public function destroy(Request $request, $id)
    {

        $request->user()->authorizeRoles(['admin']);
        $producto = Productos::FindOrFail($id);
        if(Storage::delete('public/'.$producto->foto))
        {
            Productos::destroy($id);
        }

        return redirect('productos')->with('status', 'Se elimino el producto correctamente');
    }
}
