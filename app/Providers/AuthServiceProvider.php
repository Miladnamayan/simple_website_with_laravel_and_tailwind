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
        // Gate::define('delete_post',function($user , $post){
        //     // dd($user);
        //     if ($user->id===$post->user_id){
        //         return true;
        //     }else{
        //         return false;
        //     }

        // });
        // Gate::define('update_post',function($user , $post){
        //     // dd($user);
        //     if ($user->id===$post->user_id){
        //         return true;
        //     }else{
        //         return false;
        //     }

        // });

    }
}
