<?php

namespace App\Http\Controllers\freelancer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function __construct() {

        $this->middleware('auth');
      }
      
      public function index() {
        return view('freelancer.dashboard');
      }

      public function view_application() {

        $id = Auth::id();
        $data = DB::select('select * from apply_projects,projects where projects.id = apply_projects.project_id AND apply_projects.free_id = ?',[$id]);
        return view('freelancer.view_application' ,['application'=>$data] );

      }

      public function view_profile() {


        return view('freelancer.profile');

      }

      
      public static function check_if_already_apply($id){
        $free_id = Auth::id();

        if (DB::table('apply_projects')->where('project_id', $id)->where('free_id', $free_id)->doesntExist()) {
          return 1;
        }
        else{

          return 0;
        }

      }

      public function view_projects() {
        $project = DB::select("select * from projects");
        return view('freelancer.project',['emp_project'=>$project]);
      }

      public function preview_projects($id) {
        $project = DB::select("select * from projects WHERE id = $id");
        return view('freelancer.viewproject',['preview_project'=>$project]);
      }

      public function editprofile() {
    //    $project = DB::select("select * from projects WHERE id = $id");
        return view('freelancer.editprofile');
      }

      
}
