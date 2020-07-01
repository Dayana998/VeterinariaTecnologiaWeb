<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LiveSearch extends Controller
{
    function index()
    {
     return view('duenios.index');
    }

    function action(Request $request)
    {
     if($request->ajax())
     {
      $output = '';
      $query = $request->get('query');
      if($query != '')
      {
       $data = DB::table('duenios')
         ->where('ci', 'like', '%'.$query.'%')
         ->orWhere('name', 'like', '%'.$query.'%')
         ->orWhere('lastname', 'like', '%'.$query.'%')
         ->orWhere('address', 'like', '%'.$query.'%')
         ->orWhere('phone', 'like', '%'.$query.'%')
         ->orWhere('email', 'like', '%'.$query.'%')
         ->orWhere('genero', 'like', '%'.$query.'%')
         ->orderBy('id', 'desc')
         ->get();

      }
      else
      {
       $data = DB::table('duenios')
         ->orderBy('id', 'desc')
         ->get();
      }
      $total_row = $data->count();
      if($total_row > 0)
      {
       foreach($data as $row)
       {
        $output .= '
        <tr>
         <td>'.$row->Ni.'</td>
         <td>'.$row->Nombre.'</td>
         <td>'.$row->Apellido.'</td>
         <td>'.$row->Direccion.'</td>
         <td>'.$row->Telefono.'</td>
         <td>'.$row->Email.'</td>
         <td>'.$row->Genero.'</td>
        </tr>
        ';
       }
      }
      else
      {
       $output = '
       <tr>
        <td align="center" colspan="5">No Data Found</td>
       </tr>
       ';
      }
      $data = array(
       'table_data'  => $output,
       'total_data'  => $total_row
      );

      echo json_encode($data);
     }
    }
}
