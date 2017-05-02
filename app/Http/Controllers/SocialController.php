<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Auth;
use Mail;

class SocialController extends Controller
{
	public function redirectToSocial($social)
	{
		return Socialite::driver($social)->redirect();
	}

	
	public function handleSocialCallback(Request $request)
	{
		$social=$request->path();
		$user = Socialite::driver($social)->user();
		$email=$user->getEmail();
		$logu=User::where('email',$email)->first();
		if(is_null($logu)){
			$name=$user->getName();
			$username=str_slug($name).'-'.str_random(8);
			$data=['name'=>$name,'email'=>$email,'password'=>str_random(12),'username'=>$username];
			$user=User::create($data);
			$admins=User::where('is_admin',true)->get();
			Mail::to($admins)->send(new NotifyMail($user));
			Mail::to($user)->send(new WelcomeMail($user->first_name));
			Auth::login($user);
		}
		else{
			Auth::login($logu);
		}
		return redirect('/');
	}
}
