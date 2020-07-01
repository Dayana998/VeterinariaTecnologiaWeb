<?php

namespace App\Http\Controllers;
use App\Duenios;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DueniosController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except('create','store');

    }
    public function index(Request $request)
    {
        $request->user()->authorizeRoles(['user', 'admin']);
        
    	$duenios = Duenios::all();
    	return view('duenios.index')->with('duenios', $duenios);
    }

    public function search(Request $request)
    {
        if($request->ajax())
        {
            $output="";
            $duenios=DB::table('duenios')->where('name','LIKE','%'.$request->search."%")->get();
            if($duenios)
            {
                foreach ($duenios as $key => $duenio)
                {
                    $output.='<tr>'.
                    '<td>'.$duenio->id.'</td>'.
                    '<td>'.$duenio->ci.'</td>'.
                    '<td>'.$duenio->name.'</td>'.
                    '<td>'.$duenio->lastname.'</td>'.
                    '<td>'.$duenio->address.'</td>'.
                    '<td>'.$duenio->phone.'</td>'.
                    '<td>'.$duenio->email.'</td>'.
                    '<td>'.$duenio->genero.'</td>'.
                    '<td>'. '<a href="#" class="btn btn-primary btn-sm editbtn"> <i class="fa fa-edit"></i> Edit</a>'.
                   ' <a href="#" class="btn btn-danger btn-sm deletebtn"> <i class="fa fa-trash"></i> Delete</a>'.'</td>'.
                    '</tr>';
                }
                return Response($output);
            }
        }
    }
    public function store(Request $request)
    {
          $duenios = new Duenios;

            $duenios->ci = $request->ci;
            $duenios->name = $request->name;
            $duenios->lastname = $request->lastname;
            $duenios->address = $request->address;
            $duenios->phone = $request->phone;
            $duenios->email = $request->email;
            $duenios->genero = $request->genero;
            $duenios->save();
    }
    public function update(Request $request, $id)
    {
    	$duenios = Duenios::find($id);
    	$duenios->ci = $request->ci;
        $duenios->name = $request->name;
        $duenios->lastname = $request->lastname;
        $duenios->address = $request->address;
        $duenios->phone = $request->phone;
        $duenios->email = $request->email;
        $duenios->genero = $request->genero;
        $duenios->save();
        return $duenios;
    }

    public function delete($id)
    {
    	$duenios = Duenios::find($id);
    	$duenios->delete();
    	return $duenios;
    }
}
