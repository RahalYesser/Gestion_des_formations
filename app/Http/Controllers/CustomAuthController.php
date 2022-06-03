<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\Etudiant;
use App\Models\Admin;
use App\Models\Formation;
use Illuminate\Support\Facades\Auth;

class CustomAuthController extends Controller
{
    public $admin;
  
    
   

    public function index()
    {
        return view('auth.loginetudiant');
    }

    public function adminlogin()
    {
        return view('auth.loginadmin');
    }


    public function customLogin(Request $request)
    {
        $data = $request -> validate(
            [
                'email' => 'required',
                'password' => 'required'
            ]
        );



        $etudiant = Etudiant::where('email', '=', request('email')) -> first();
          
         if($etudiant!=NULL){
            if (Hash::check($data['password'], $etudiant['password'])) 
                return view('profiletudiant',['data'=>$etudiant]);
            } 
            else {
                return redirect("login");
            }
        }

        public function Admin(Request $request)
    {
        $data = $request -> validate(
            [
                'admin_name' => 'required',
                'key' => 'required'
            ]
        );

        $this->admin = Admin::where('key', '=', request('key')) -> first();
        
          if($this->admin!=NULL){
             if ($data['key']==$this->admin->key) 
                    return redirect('adminpage');
           }
            
            else {
                
                return view("admin");
           }
    }

        function insert (request $req){
            
           
            $nomFormation =$req->get('nomFormation');
            $nomFormateur =$req->get('nomFormateur');
            $date =$req->get('date');
            $description =$req->get('description');
            $frm =new Formation();
            $frm->  nomFormation = $nomFormation;
            $frm -> nomFormateur =$nomFormateur;
            $frm -> date =$date;
            $frm -> admin_id = 1; //$this->admin->id ;
            $frm -> description =$description;
            $frm -> save();
            return redirect('adminpage');
        }

    public function registration()
    {
        return view('auth.register');
    }


    public function customRegistration(Request $request)
    {
        $request->validate([
            'nomprenom' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6',
            'class' => 'required',
            'etablissment' => 'required',
        ]);

        $data = $request->all();
        $check = $this->create($data);

        return view("profiletudiant",['data'=>$data]);
    }


    public function create(array $data)
    {
      return Etudiant::create([
        'nomprenom' => $data['nomprenom'],
        'email' => $data['email'],
        'class' => $data['class'],
        'etablissment' => $data['etablissment'],
        'password' => Hash::make($data['password'])
      ]);
    }


    // public function dashboard()
    // {
    //     if(Auth::check()){
    //         return view('profiletudiant');
    //     }

    //     return redirect("loginetudiant")->withSuccess('are not allowed to access');
    // }


    public function signOut() {
        Session::flush();
        Auth::logout();

        return Redirect('/');
    }

}


