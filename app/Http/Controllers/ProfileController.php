<?php

namespace App\Http\Controllers;

use App\User;
use Auth;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\ProfileRequest;
use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\ChangePasswordRequest;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{

   public function __construct(){
        $this->middleware('admin', ['only' => ['create']]);
        $this->middleware('owner', ['except' => ['create']]);
    }

    public function create(){
        return view('dashboard.create_user');
    }

    public function store(UserCreateRequest $request){
        $input=$request->all();
        User::create($input);
        return redirect('dashboard/users')->with('status','User Created');
    }

    public function show(User $user){
        return view('dashboard.profile',compact('user'));
    }

    public function update(ProfileRequest $request,User $user){
        $input=$request->all();
        if($request->hasFile('imgUrl')){
            $imageName = Auth::user()->username.'-'.str_random(8).'.'.$request->file('imgUrl')->getClientOriginalExtension();
            $request->file('imgUrl')->move(
            base_path() . '/public/uploads/profile/',$imageName);
            $input['imgUrl']='/uploads/profile/'.$imageName;

            $user->update([
                'name' => $input['name'],
                'username' => $input['username'],
                'imgUrl'=>$input['imgUrl'],
            ]);
        }
        else{
            $user->update([
                'name' => $input['name'],
                'username' => $input['username'],
            ]);
        }
        return redirect('dashboard/'.$user->username.'/profile')->with('status','Profile Updated');
    }

    public function password(ChangePasswordRequest $request,User $user){
        $input=$request->all();
        $user->update(['password'=>bcrypt($input['password'])]);
        return redirect()->back()->with('status','Password Updated');
    }
}
