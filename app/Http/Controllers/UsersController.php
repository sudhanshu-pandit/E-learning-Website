<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User::all();
        return view('dashboard.user.list', compact('users','users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('dashboard.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'Name'=>'required',
            'Email'=> 'required|email|unique:users',
            'is_admin'=> 'required',
            'password'=> 'required|min:6'
        ]);
 
        $user = new User([
            'name'=> $request->get('Name'),
            'email'=> $request->get('Email'),
            'is_admin'=> $request->get('is_admin'),
            'password'=> $request->get('password')
        ]);
 
        $user->save();
        return redirect('/admin-home/user')->with('success', 'User has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show($user_id)
    {
        $user = User:: where(['id'=>$user_id])->first();
        return view('dashboard.user.view',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($user_id)
    {
        $user = User:: where(['id'=>$user_id])->first();
        return view('dashboard.user.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        
        
        $request->validate([
            'name'=>'required',
            'email'=> 'required',
            'is_admin' => 'required'
        ]);
        $user = User::where(['id'=>$request->get('id')])->update([
            'name'=>$request->get('name'),
            'email'=>$request->get('email'),
            'is_admin'=>$request->get('is_admin')
        ]);
        return redirect('/admin-home/user')->with('success', 'User updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($user_id)
    {
        //
         $user = User:: where(['id'=>$user_id])->delete();
        return redirect('/admin-home/user')->with('success', 'User deleted successfully');
    }
}
?>

