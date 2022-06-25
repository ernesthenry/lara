<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
    //
    public function index()
    {

        // raw queries
        $users =  DB::select('select * from users');
        // Query Builder
        $users = DB::table('users')->where(['name', 'email'])->whereNotNull('email')->orderBy('name')->get();
    }
}
