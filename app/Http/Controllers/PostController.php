<?php

namespace App\Http\Controllers;

use App\Events\PostCreatedEvent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PostController extends Controller
{
    public function index(){
        $event =new PostCreatedEvent(['name' => 'titre']);
        event($event);
      
        dd();
    }
}
