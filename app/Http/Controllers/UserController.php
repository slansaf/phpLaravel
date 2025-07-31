<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use App\Models\User;


class UserController extends Controller
{
    //
    // public function showUsers() {
    //    $users = DB::connection('mysql')->table('Users')->select(['first_name', 'last_name', 'birth_year'])->get();
    //    return view('users', ['users' => $users]);
    // }

    public function index(){
        $this->authorize('view-any', User::class);
        $users = User::all();
       
     
    }

    public function show(User $user){
        $this->authorize('view', $user); 
       
        return $user;
    }


}
