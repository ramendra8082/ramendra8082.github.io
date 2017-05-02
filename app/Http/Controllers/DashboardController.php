<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;

class DashboardController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        return view('dashboard.index');
    }

    public function articles(User $user){
        $articles=$user->articles()->latest()->get();
        return view('dashboard.articles',compact('articles'));
    }

    public function discussions(User $user){
        $discussions=$user->discussions()->latest()->get();
        return view('dashboard.discussions',compact('discussions'));
    }
}