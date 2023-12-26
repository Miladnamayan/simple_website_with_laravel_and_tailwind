<?php

namespace App\Http\Controllers;

use App\Mail\AuthorsMail;
use App\Models\User;
use App\Notifications\AdminsNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;


class ProfileController extends Controller
{
    public function profiles(){
        $user = Auth::user();
        $posts = $user->posts;
        // dd( $user->notifications);
        $notification=$user->notifications;
        $newNotification = $user->unreadNotifications;
        // dd( $newNotification);
        //  $notification->markAsRead();
        // dd($user->unreadNotifications);
        // $notification->delete();
    //    dd($notification->count()) ;
        // dd( $notification->last()->data);

        return view('Home.profiles', ['posts'=> $posts,'user'=> $user,'notification'=> $notification,'newNotification'=> $newNotification]);
        session()->flush();

    }

    // public function authorsmail(Request $request){
    //     $user = Auth::user();
    //     $isChecked = $request->has('authorsmail') ? 1 : 0;
    //     if($isChecked == 1){
    //         Mail::to('admin@gmail.com')->send(new Authorsmail($user));
    //         return back();
    //     }
    // }

    public function adminsnotification(Request $request){
        $admin = User::find(9);
        $user=Auth::user();
        $isChecked = $request->has('adminsnotification') ? 1 : 0;
        if($isChecked == 1){
        // Notification::route('mail', 'admin@gmail.com')->notify(new AdminsNotification());
        $admin->notify(new AdminsNotification($user));
            return back();
        }
    }

}
