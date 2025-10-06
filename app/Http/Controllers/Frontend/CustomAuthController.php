<?php
 
namespace App\Http\Controllers\Frontend;
 
use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class CustomAuthController extends Controller

{
 
    public function index()
    {
        return view('login');
    }  
       
 
    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $credentials = $request->only('email','password');
        if (Auth::attempt($credentials)) {
            if (Auth()->user()->is_admin==1){
                return redirect()->route('admin-home');
            } 
            return redirect()->intended('dashboard')
                             ->withSuccess('have signed-in');
        } 
        else
        {
            return redirect("login")->withSuccess('Login details are not valid');
        }
            
    }
 
 
    public function registration()
    {
        return view('registration');
    }
       
 
    public function customRegistration(Request $request)
    {  
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
            
        $data = $request->all();
        $check = $this->create($data);
          //dd($data);
        return redirect("dashboard")->withSuccess('have signed-in');
    }
 
 
    public function create($data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }    
     
 
    public function dashboard()
    {
        if(Auth::check()) {
            return view('dashboard');
        }
   
        return redirect("login")->withSuccess('are not allowed to access');
    }
     
 
    public function signOut() 
    {
        Session::flush();
        Auth::logout();
   
        return redirect('login');
    }

}