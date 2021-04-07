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
        $data = DB::select('select * from apply_projects where free_id = ?',[$id]);
        return view('freelancer.view_application' ,['application'=>$data] );
      }

      public function view_projects() {
        $project = DB::select("select * from projects");
        return view('freelancer.project',['emp_project'=>$project]);
      }
}
