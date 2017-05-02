<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\User;
use App\Message;
use App\Article;
use App\Discussion;

class AdminController extends Controller
{
    public function __construct(){
        $this->middleware('admin');
    }

    public function users(){
    	$users=User::user()->get();
    	return view('dashboard.users',compact('users'));
    }

    public function editors(){
        $users=User::editor()->get();
        return view('dashboard.editors',compact('users'));
    }

    public function admins(){
        $users=User::admin()->get();
        return view('dashboard.admins',compact('users'));
    }

    public function user_delete(User $user){
        if($user->admin){
            return redirect()->back()->with('status-alert','Admin can not be Deleted');
        }
        $user->delete();
        return redirect()->back()->with('status-danger','User Deleted');
    }

    public function makeEditor(User $user){
        $user->update(['editor'=>true]);
        return redirect('dashboard/editors')->with('status','User Assigned Editor');
    }

    public function makeUser(User $user){
        $user->update(['editor'=>false]);
        return redirect('dashboard/users')->with('status-alert','Editor unassigned to User');
    }

    public function messages(){
        $messages=Message::latest()->get();
        return view('dashboard.messages',compact('messages'));
    }

    public function delete_message($message){
        Message::where('id',$message)->firstOrFail()->delete();
        return redirect()->back()->with('status-danger','Message Deleted');
    }

    public function articles(){
        $articles=Article::latest()->get();
        return view('dashboard.articles',compact('articles'));
    }

    public function discussions(){
        $discussions=Discussion::latest()->get();
        return view('dashboard.discussions',compact('discussions'));
    }
}