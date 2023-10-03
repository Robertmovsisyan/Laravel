<?php

namespace App\Http\Controllers;

use App\Models\RegiModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Laravel\Telescope\RegistersWatchers;


class RegiController extends Controller
{
 protected $redirectTo='/product';
  public function register(){
      return(view('regi'));

  }

    public function regi(Request $request){
      $validation=$request->validate([
         'name'=>'required',
         'email'=>'required',
          'password'=>'required|min:7|confirmed' ,
      ]);

      RegiModel::create([
          'name'=>$request->name,
          'email'=>$request->email,
          'password'=>\Hash::make($request->password),
      ]);

    }
    public function login(){
      return(view('log'));
    }

    public function log(Request $request){
       $login=$request->only('email','password');
       if(Auth::attempt($login)){
           return redirectTo('product');
       }
    }


}
