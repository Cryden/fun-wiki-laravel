<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\User;
use App\UserData;
use Auth;
use Illuminate\Support\Facades\Cache;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */


    public function userInfo($user_id)
    {
        $users = UserData::where('user_slug', $user_id)->first();

        return view('users.user', $users);
    }

    public function userProfile()
    {
        $user = Auth::user();

        $user_data = UserData::where('user_id', $user->id)->first();

        $user_slug = 'id'.str_pad($user->id, 10, '0', STR_PAD_LEFT);
        $user_name = $user->name;

        if (!$user_data) {
            $account = new UserData([
                'user_slug'     => $user_slug,
                'user_name'     => $user_name,
            ]);

            $account->user()->associate($user);
            $account->save();
        }

        $user_data = UserData::where('user_id', $user->id)->first();

        return view('users.profile', $user_data);
    }
}
