<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudiant;
use Auth;

class studentController extends Controller
{

    function readData (){
        $fdata =Etudiant::all();
        return view('etudiantlist',['data'=>$fdata]);
    }

}


