<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
  

    public function create_customer() {
        return view('auth/customer');
    }
    
    public function store_customer(Request $request) 
    {
       $restro = new User;
        $restro->name = $request->name;
        $restro->email = $request->email;
        $restro->category = $request->category;
        $restro->password = Hash::make($request['password']);
        $restro->user_type = 'Customer';
        $restro->save();
        
        return view('auth/login');
    }

}
