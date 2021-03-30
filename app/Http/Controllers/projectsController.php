<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\addproject;
use App\Models\apply_projects;

class projectsController extends Controller
{
    //

    public function index(){

        $project = DB::select("select * from projects");
        return view('projects',['emp_project'=>$project]);

    }

    public function view_project($id){

        $view = DB::select('select * from projects where id = ?',[$id]);
        return $view;
        //return view('employee/projectupdate',['update_project'=>$edit]);
    }

    public function apply_project($id){

        $project = DB::select('select * from projects where id = ?',[$id]);
          
        return view('apply');
        //return $view;
  
    }


    public function applyforproject(Request $request, $pid){

    $request->validate([
    'file' => 'required|mimes:pdf,xlx,csv|max:2048',
    ]);

    $filename = time().'.'.$request->file->extension();
    $request->file->move(public_path('uploads'),$filename);

    $path = array("path"=> 'uploads/'.$filename);

    $ctext = $request->ctext;
    $price = $request->price;

    $status = '0';
    $free_id = Auth::id();


    echo $data = apply_projects::create([
      'free_id' => $free_id,
      'project_id' => $pid,
      'resume_path' => $path,
      'ctext' => $ctext,
      'price' => $price,
      'status'=> $status,
      ]);

}

}
