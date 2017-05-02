<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Mail;
use App\Mail\VerifyMail;
use App\Mail\NotifyMail;

class RegisterController extends Controller
{
	/*
	|--------------------------------------------------------------------------
	| Register Controller
	|--------------------------------------------------------------------------
	|
	| This controller handles the registration of new users as well as their
	| validation and creation. By default this controller uses a trait to
	| provide this functionality without requiring any additional code.
	|
	*/

	use RegistersUsers;

	/**
	 * Where to redirect users after registration.
	 *
	 * @var string
	 */
	protected $redirectTo = '/dashboard';

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}


                 
	
	/**
	 * Get a validator for an incoming registration request.
	 *
	 * @param  array  $data
	 * @return \Illuminate\Contracts\Validation\Validator
	 */
	protected function validator(array $data)
	{
		return Validator::make($data, [
			'name' => 'required|max:255',
			'email' => 'required|email|max:255|unique:users',
			'password' => 'required|min:6|confirmed',
			]);
	}

	/**
	 * Create a new user instance after a valid registration.
	 *
	 * @param  array  $data
	 * @return User
	 */
	protected function create(array $data)
	{
		if(env('ENABLE_RECAPTCHA')){
			$captcha=$data['g-recaptcha-response'];
			$respon=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".env('GOOGLE_RECAPTCHA_SECRET')."&response=".$captcha);
			$respon=json_decode($respon,true);
			if(!$respon['success']){
				return redirect()->back()->with('status-danger','Robot');
			}
		}
		$username=str_slug($data['name']).'-'.str_random(8);
		$user=User::create([
			'name' => $data['name'],
			'email' => $data['email'],
			'username' => $username,
			'password' => bcrypt($data['password']),
			'token'=>str_random(60)
			]);

          $confirmation_code=str_random(8);
		 Mail::to($user)->send(new VerifyMail($confirmation_code));
		//$admins=User::where('is_admin',true)->get();
		//Mail::to($admins)->send(new NotifyMail($user));
		//Flash::message('Thanks for signing up! Please check your email.');
         return $user;  
		
	}
}
