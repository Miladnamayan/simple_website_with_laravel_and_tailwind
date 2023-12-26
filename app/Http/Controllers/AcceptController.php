<?php

namespace App\Http\Controllers;

use App\Mail\AdminsMail;
use App\Models\User;
use App\Notifications\AuthorsNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;
// use PharIo\Manifest\AuthorCollection;

class AcceptController extends Controller
{
    public function accept_status(Request $request,User $user)
    {
        $isChecked = $request->has('accept_status') ? 1 : 0;
        if($isChecked == 1){
            //     Mail::to($user->email)->send(new AdminsMail($user));
            notification::send ($user,new AuthorsNotification($user));
        }

        if($user->role != 'Public-user') {
            $user->update([
                'accept_status' => $isChecked,
            ]);
        }
        return back();
    }
}
