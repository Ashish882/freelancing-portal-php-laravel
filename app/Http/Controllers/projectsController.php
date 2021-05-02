<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

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

        $free_id = Auth::id();

        if (DB::table('apply_projects')->where('project_id', $id)->where('free_id', $free_id)->doesntExist()) {

        $project = DB::select('select * from projects where id = ?',[$id]);
          
        return view('freelancer.apply');

        }

        else{

            echo "already applied";
        }
  
  
    }


    public function applyforproject(Request $request, $pid){
    $free_id = Auth::id();

    if (DB::table('apply_projects')->where('project_id', $pid)->where('free_id', $free_id)->doesntExist()) {

    $request->validate([
    'file' => 'required|mimes:pdf,xlx,csv|max:2048',
    ]);

    $filename = time().'.'.$request->file->extension();

    $request->file->move(public_path('uploads'),$filename);

    $path = array("path"=> 'uploads/'.$filename);
    $j_path = json_encode($path);
    
   
    $ctext = $request->ctext;
    $price = $request->price;

    $status = '0';
  


     $data = apply_projects::create([
      'free_id' => $free_id,
      'project_id' => $pid,
      'resume_path' => $j_path ,
      'ctext' => $ctext,
      'price' => $price,
      'status'=> $status,
      ]);


      if($data){

        return "Successfully applied for project";
      }


   }

   else{

    echo "Already applied";
   }
}


}
