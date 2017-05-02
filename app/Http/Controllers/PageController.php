<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Message;
use App\Article;
use Input;
use App\Http\Requests;
use App\Http\Requests\MessageRequest;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
	public function home(){
		return view('vale.index');
	}

	public function about(){
		return view('vale.about');
	}

	public function contact(){
		return view('vale.contact');
	}
	public function bloggrid(){
		return view('vale.blog-grid');
	}
	public function bloglist(){
		return view('vale.blog-list');
	}
	public function blogsingle(){
		return view('vale.blog-single');
	}
	public function booking(){
		return view('vale.booking');
	}
	public function carsingle(){
		return view('vale.car-single');
	}
	public function confirmation(){
		return view('vale.confirmation');
	}
	public function gallerymasonry(){
		return view('vale.gallery-masonry');
	}
	public function gallerythree(){
		return view('vale.gallery-three-column');
	}
	public function index2(){
		return view('vale.index2');
	}
	public function index3(){
		return view('vale.index-3');
	}
	public function ourcar(){
		return view('vale.our-cars');
	}
	public function adminourcar(){
		return view('vale.admin-our-car');
	}
	public function deleteourcar(){
		return view('vale.delete-our-car');
	}
	public function updateourcar(){
		return view('vale.update-our-car');
	}

	public function registration()
	{
	    return view('vale.registration');
	}


	public function sendmail(){
		return view('vale.sendmail');
	}
	public function services(){
		return view('vale.services');
	}
	public function addcar(){
		return view('vale.add-car');
	}
     
	
	 

	public function home2(){
		return redirect('/');
	}

	public function sendMessage(MessageRequest $request){
		$input=$request->all();
		Message::create($input);
		return redirect('/')->with('status','Message Sent');
	}

	public function search(){
		if (Input::has('query')) {
			$query = Input::get('query');
			$articles_title=Article::where('title', 'LIKE', "%$query%")->get();
			$articles_content=Article::where('content', 'LIKE', "%$query%")->get();
			$articles=$articles_content->merge($articles_title);
			return view('pages.search',compact('query','articles'));
		}
		else{
			return redirect('/');
		}
	}

	public function verify(){
		return view('pages.verify');
	}

	public function verifyToken($token){
		if($token){
			$user=User::where('token',$token)->first();
			$user->update(['token'=>null]);
			Mail::send('emails.welcome',['user'=>$user],
				function($m) use ($user){
					$m->to($user->email, $user->username)
					->subject('Welcome To '.env('SITE_NAME'));
				});
			return redirect('/')->with('status','Your Email have been verified. You can now login.');
		}
		return redirect('/')->with('status-alert','Invalid Token');
	}

	public function sendToken(Request $request){
		$input=$request->all();
		$email=$input['email'];
		if($email){
			$user=User::where('email',$email)->first();
			if($user->token){
				Mail::queue('emails.verify', ['user' => $user], function($message) use ($user){
					$message->to($user->email, $user->username)
					->subject(env('SITE_NAME').' | Verify Your email');
				});
				return redirect('/')->with('status','Email Sent');
			}
			else{
				return redirect('/')->with('status','Already Verified');
			}
		}
		return redirect('/')->with('status-alert','Email Not Registered');
	}
}
