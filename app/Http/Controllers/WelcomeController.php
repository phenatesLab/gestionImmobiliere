<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class WelcomeController extends Controller
{
    /***
     * @return \Illuminate\Contracts\View\Factory|View
     */
    public function index () : View
    {
        return view('index');
    }

    public function goods() : View
    {
        return view('goods.index');
    }

    public function contact() : View
    {
        return view('pages.contact');
    }

    public function show() : View
    {
        return view('goods.show');
    }

    public function about() : View
    {
        return view('pages.about');
    }
}
