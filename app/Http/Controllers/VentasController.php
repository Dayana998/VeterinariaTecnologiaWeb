<?php

namespace App\Http\Controllers;
use App\Ventas;
use App\Productos;
use App\Duenios;

use response;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\input;
use Illuminate\Http\Request;


class VentasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('ventas.index',[
            'ventas' => Ventas::paginate(5)
        ]);
    }

    public function addVenta(Request $request){
        $rules =array(
            'productos_id'=> 'required',
            'duenio_id'=> 'required',
            'precio'=> 'required',
            'cantidad'=> 'required',
        );
        $validator = Validator::make (input::all(), $rules);
        if($validator->fails())

        return response()->json(array('errors'=>$validator->getMessageBag()->toarray()));
        else{
            $venta=new Ventas;
            $venta->duenio_id=$request->duenio_id;
            $venta->producto_id=$request->producto_id;
            $venta->precio=$request->precio;
            $venta->cantidad=$request->cantidad;
            $venta->save();
            return response()->json($venta);
        }

    }




    /*
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ventas.create', [
            'ventas' => new Ventas(),
            'productos'=>Productos::get(),
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
        
        request()->validate(
            [
                
                'precio'=>'required',
                'cantidad'=>'required'
                
            ]
        );
        Ventas::create(request()->all());
        return redirect('ventas')->with('status','Se Registro correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view ('ventas.show', ['venta' => Ventas::findOrfail($id)
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
        $venta=Ventas::FindOrFail($id);    
        $productos=Productos::select('id','name','precio')
        ->orderBy('name')->get();
        $duenios=Duenios::select('id','name')
        ->orderBy('name')->get();
        return view('ventas.edit')
        ->with('ventas',$venta)
        ->with('productos',$productos)
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
        $ventas=Ventas::findOrFail($id);
        $ventas->update($datos);
        
        return redirect('ventas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Ventas::destroy($id);
        return redirect('ventas')->with('status', 'Se elimino la venta correctamente');
    }
}
