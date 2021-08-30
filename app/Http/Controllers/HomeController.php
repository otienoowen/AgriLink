<?php

namespace App\Http\Controllers;
  
use App\Http\Controllers\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // if(auth()->user()->role == 'admin')
        // {
        //     return redirect('/admin');
        // }
            $role = auth()->user()->role; 
            switch ($role) {
              case 'admin':
                return redirect('admin');
                break;
              case 'farmer':
                return redirect('farmer_profile');
                break; 
    
              case 'market':
                return redirect('market-profile');
                break; 
          
              default:
                return '/home'; 
              break;
            }

        return view('home');

        

       
                
              
    }
}
