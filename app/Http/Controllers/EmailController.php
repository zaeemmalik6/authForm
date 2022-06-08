<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Jobs\sendTestMailJob;

class EmailController extends Controller
{
    public function sendMailToAll()
    {
        $users = User::all()->pluck('email');

        foreach ($users as $user) {
            dispatch(new sendTestMailJob($user));
        }

        dd("Email is Sent.");
    }
}
