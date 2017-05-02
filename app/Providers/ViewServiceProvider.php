<?php

namespace App\Providers;
use App\User;
use App\Message;
use App\Article;
use App\Discussion;
use Auth;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('layouts.dashboard', function ($view) {
            if(Auth::user()->admin){
                $count['admins']=User::admin()->count();
                $count['editors']=User::editor()->count();
                $count['users']=User::user()->count();
                $count['messages']=Message::all()->count();
                $count['articles']=Article::all()->count();
                $count['discussions']=Discussion::all()->count();
            }
            if(Auth::user()->admin or Auth::user()->editor){
                $count['user_articles']=Auth::user()->articles->count();
            }
            if(Auth::check()){
                $count['user_discussions']=Auth::user()->discussions->count();

            }
            $view->with('count',$count);
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
