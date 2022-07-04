<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;

use App\Models\Team;

use Illuminate\Support\Facades\DB;
use Laravel\Jetstream\Jetstream;


class UserController extends Controller
{
  public function index(){
    $users = User::all();
    return view('userpanel',compact('users'));
  }
  public function create(){

    return view('cuser');
  }
  public function store(Request $request){

    $status=$request->validate([
        "password" => 'required|confirmed',

    ]);


    $user = new User;
    $user->name = $request->name;
    $user->email = $request->email;

    $user->password=Hash::make($request->password);
    $user->admin=$request->admin;



    $user->save();
    $users = User::all();
    return view('userpanel',compact('users'));

  }
  public function update(Request $request){
    $user = User::find($request->id);

        return view ('euser',compact('user',));
  }
  public function edit(Request $request){
    $user= User::find($request->id);
    $user->name = $request->name;
    $user->email = $request->email;

    
    $user->admin=$request->admin;



    $user->save();
    return redirect()->route('dashboard', );

  }
}
