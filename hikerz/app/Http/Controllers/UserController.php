<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;

class UserController extends Controller
{
    public function showUsers()
    {
        try {
            $users = DB::table('users') ->get();
            return view('users', ['users' => $users]);
        } catch (QueryException $e) {
            return view('error', ['error' => $e->getMessage()]);
        }
    }
}


