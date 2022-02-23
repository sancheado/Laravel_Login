<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class MainController extends Controller
{
    function index()
    {
     return view('login');
    }

    function checklogin(Request $request)
    {
     $this->validate($request, [
      'email'   => 'required|email',
      'password'  => 'required|alphaNum|min:3'
     ]);

     $user_data = array(
      'email'  => $request->get('email'),
      'password' => $request->get('password')
     );

     if(Auth::attempt($user_data))
     {
      return redirect('main/successlogin');
     }
     else
     {
      return back()->with('error', 'Wrong Login Details');
     }

    }

    function successlogin()
    {
     return view('successlogin');
    }

    function saveUser(Request $request){
        $user = new User();
        $user->name = $request->input("name");
        $user->username = $request->input("username");
        $user->email = $request->input("email");
        $user->password = $request->input("password");
        // $user->password => Hash::make($request->password);
        // $user->remember_token = str_random(10);
        $user->save();
        $user = User::all();
        $request = [
            'email'=> $user.email,
            'password'=> $user.password
        ];
        $this->checklogin($request);
        return view('successlogin');
    }
    function logout()
    {
     Auth::logout();
     return redirect('main');
    }

}
?>
