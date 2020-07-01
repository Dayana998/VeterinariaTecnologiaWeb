<?php

namespace App\Http\Controllers;
use App\Animales;
use App\Duenios;
use Illuminate\Http\Request;

class AnimalesController extends Controller
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
        $request->user()->authorizeRoles(['user', 'admin']);

        return view('animales.index',[
            'animales' => Animales::paginate(5)
        ]);
        }
    public function search(Request $request)
    {

        return view('animales.index',[
            'animales'=>Animales::name($request->get('name'))
            ->chip($request->get('chip'))
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

        return view('animales.create', [
            'animales' => new Animales,
            'duenios'=>Duenios::get()]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        request()->validate(
            [
                'chip'=>'required|numeric',
                'name'=>'required',
                'raza'=>'required',
                'color'=>'required',
                'peso'=>'required',
                'genero'=>'required|in:masculino,femenino',
                'duenio_id'=>'required'

            ],[
                'genero.in'=>'Debe elegir una opcion'
            ]
        );
        Animales::create(request()->all());
        return redirect('animales')->with('status','Se Registro correctamente');
        // return redirect('animales')->with('status','Se Registro correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        return view ('animales.show', ['animal' => Animales::findOrfail($id)

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $animales=Animales::FindOrFail($id);
        $duenios=Duenios::select('id','name')
        ->orderBy('name')->get();
        return view('animales.edit')
        ->with('animales',$animales)
        ->with('duenios',$duenios);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datos=$request->all();
        $animales=Animales::findOrFail($id);
        $animales->update($datos);

        return redirect('animales');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        Animales::destroy($id);

         return redirect('animales')->with('status', 'Se elimino el registro correctamente');
    }
}