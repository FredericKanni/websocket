<?php

namespace App\Http\Controllers;

use App\Http\Resources\FriendsResource;
use App\Http\Resources\UsersResource;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    //

    public function index($id)
    {
        $user= User::where('id', '=', $id)->first()->with('friends');

        return 
        //new UsersResource(
            $user
         //   ) 
            ;
    }

}
