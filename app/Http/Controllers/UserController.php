<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Company;

class UserController extends Controller
{
    public function companies(){
        $companies = Company::all();

        return view('home', compact('companies'));
    }
}
