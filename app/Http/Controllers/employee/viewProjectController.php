<?php

namespace App\Http\Controllers\employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\addproject;


class viewProjectController extends Controller
{
 

    public function index(){
        $user_id = Auth::id();
        $project = DB::select("select * from projects WHERE emp_id =?",[$user_id]);
        return view('employee/viewproject',['emp_project'=>$project]);

        }

   public function show($id) {
            $edit = DB::select('select * from projects where id = ?',[$id]);
            return view('employee/projectupdate',['update_project'=>$edit]);
    }


    public function deleteproject($id){

      $emp_id = Auth::id();
      $data = addproject::find($id);
      $data->delete();
      return $data;

    }

    public function editproject(Request $request, $id){

        $request->validate([
         'pname' => 'required|string|max:100',
         'pcat' => 'required|string|max:30',
         'dis' => 'required|string|max:1200',
         'price' => 'required|string|max:80',
        ]);

      $emp_id = Auth::id();
    
      $data = addproject::find($id);

      $data->pname = $request->pname;
      $data->pcat = $request->pcat;
      $data->dis = $request->dis;
      $data->price = $request->price;
      $data->save();
      return $data;

    }


}
