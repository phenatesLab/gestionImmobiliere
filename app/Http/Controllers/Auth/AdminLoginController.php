<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\View\View;

class AdminLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin');
    }

    /***
     * @return \Illuminate\Contracts\View\Factory|View
     */
    public function showLoginForm() : View
    {
        return view('auth.admin-login');
    }

    public function login()
    {
        return true;
    }
}
