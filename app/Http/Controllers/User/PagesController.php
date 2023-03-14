<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function about()
    {
        return view('user.about');
    }

    public function service()
    {
        return view('user.service');
    }
}
