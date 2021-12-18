<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $email;

    protected $redirectTo = '/admin';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
 
        $this->email = $this->findEmail();
    }

    public function findEmail()
    {
        $login = request()->input('login');
 
        $fieldType = filter_var($login, FILTER_VALIDATE_EMAIL) ? 'email' : 'nomor_induk';
 
        request()->merge([$fieldType => $login]);
 
        return $fieldType;
    }

    public function email()
    {
        return $this->email;
    }

    public function logout(Request $request) {
        Auth::logout();
        return redirect('/');
      }
}
