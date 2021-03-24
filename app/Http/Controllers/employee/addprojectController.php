<?php

namespace App\Http\Controllers\employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\addproject;
use Illuminate\Support\Facades\Auth;

class addprojectController extends Controller
{

    public function __construct() {
        $this->middleware('auth');
      }


    public function create()
    {
        return view('employee.addproject');
    }
    public function addproject(Request $request){

        $request->validate([
         'pname' => 'required|string|max:100',
         'pcat' => 'required|string|max:30',
         'dis' => 'required|string|max:1200',
         'price' => 'required|string|max:80',
        ]);

      $status = '0';
      $id = Auth::id();
        
      echo $data = addproject::create([
        'pname' => $request->pname,
        'pcat' => $request->pcat,
        'dis' => $request->dis,
        'price' => $request->price,
        'status' => $status,
        'emp_id'=> $id ,
        ]);

    }

}
