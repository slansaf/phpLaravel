<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
    //
    public function showUsers() {
       $users = DB::connection('mysql')->table('Users')->select(['first_name', 'last_name', 'birth_year'])->get();
       print_r($users);
    }
}
