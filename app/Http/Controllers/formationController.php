<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formation;
use Illuminate\Support\Facades\Auth;

class formationController extends Controller
{
    public $showpostmodel = false;
    
    
    function showingmodel(){
        $this->showedit = true;
    }


    function readDataForAdmin (){
        $fdata =Formation::all();
        return view('adminpage',['data'=>$fdata]);
    }

    function readDataForUser (){
        $fdata =Formation::all();
        return view('userpage',['data'=>$fdata]);
    }

    function destroy($id){
        $fdata =Formation::whereId($id)->first();
        $fdata -> delete();
        return redirect ('adminpage');
    }



}
