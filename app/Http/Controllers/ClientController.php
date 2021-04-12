<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;

class ClientController extends Controller
{
    public function index(){
        $clients = DB::select('select * from users where active = ?', [1]);
        return view('clients');
    }
}
