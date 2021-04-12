<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use  Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
          $user_id = auth()->user()->id;
          $company_id = DB::select('select * from users_have_companies where user_id = ?', [$user_id]);
         // dd($company_id[0]->company_id);
         $company_name[] = "";
         foreach ($company_id as $key ) {
            $company_name[] = DB::select('select * from companies where id = ?', [$key->company_id]);
         }
         //dd($company_name);
         return view('home', compact('company_name'));
    }
}
