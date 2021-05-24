<?php

namespace App\Http\Controllers\AuthInvestigador;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\User;


class LoginCotroller extends Controller
{
    use AuthenticatesUsers;

    public function __construct()
    {
        $this->middleware('guest:investigadores')->except('logout');
    }

    public function showLoginForm()
    {
      $this->middleware('investigadores');
      return View('investigador.login');
    }

    public function login(Request $request)
    {
      $validate= $this->validate($request, [
        'email'   => 'required|email',
      ]);
  
        if (Auth::guard('investigadores')->attempt(['email' => $request->email, 'password' => $request->password, 'estado'=>'1'], $request->remember)) {
      
          return redirect()->route('dashboard');
        }else{
          return redirect()->back()->withErrors(['mensaje'=>"Usuario no existe o no esta activo"]);
        }
      
    }
    
    protected function guard()
    {
        return Auth::guard('investigadores');
    }
    
    public function logout()
    {
      Auth::guard('investigadores')->logout();
      return redirect()->route('investigador.login');
    }

}
