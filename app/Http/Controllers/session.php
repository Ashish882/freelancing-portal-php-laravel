<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class session extends Controller
{
    //
    public function getSessionData(Request $request)
    {
    
        if($request->session()->has('name')){

            echo $request->session()->get('name');
        }

        else{

            echo 'No data in the session ';
        }
    }

    public function storeSessionData(Request $request){


        $request->session()->put('name','Ashish');
        echo "Data is store in session";
    }

    public function deleteSessionData(Request $request){

        $request->session()->forget('name');
        echo "data has been removed from session";
    }
}
