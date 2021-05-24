<?php

namespace App\Http\Controllers\AuthInvestigador;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\User;


class LoginCotroller extends Controller
{
    use AuthenticatesUsers;

    public function __construct()
    {
        $this->middleware('guest:investigadores')->except('logout');
    }

}
