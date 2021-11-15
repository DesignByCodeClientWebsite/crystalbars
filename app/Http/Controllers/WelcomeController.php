<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class WelcomeController extends Controller
{


    /**
     * @return View
     */
    public function __invoke(): View
    {
        return view('welcome');
    }
}
