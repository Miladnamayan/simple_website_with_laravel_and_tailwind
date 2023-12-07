<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Models\Post;
use App\Policies\PostPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        Post::class=>PostPolicy::class
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {

        // $this->postpol

        // Gate::define('update',function($user , $posts){
            // dd( $posts->where('user_id' , '=' , $user->id));
        // Gate::define('update',function($user){
            // $posts=Post::get()->where('user_id' , '=' , $user->id);
            // $posts=   $post->where('user_id' , '=' , $user->id);
            // $posts->where('user_id' , '=' , $user->id);
            // dd($posts->where('user_id' , '=' , $user->id));
        // return $posts->where('user_id' , '=' , $user->id);
        // return
        // $posts= Post::where('user_id' , '=' , $user->id);
        // dd($post);
        // return $posts;

        // if($posts->where('user_id' , '=' , $user->id)){
        //     return true;
        // }else
        // {
        //     return false;
        //     }

            // get()->where('user_id' , '=' , $user->id);

        // return  $posts->where($posts->user_id = $user->id);


        // });
    }
}
