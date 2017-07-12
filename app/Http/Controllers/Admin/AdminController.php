<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\UserData;
use Illuminate\Support\Facades\Cache;

class AdminController extends Controller
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
    public function index()
    {
        return view('admin.home');
    }

    public function users()
    {
        $users_data = UserData::all();

        // add user Online status
        foreach ($users_data as $key) {
            $key['user_isOnline'] = Cache::has('user-is-online-'.$key['user_id']);
        }

        return view('admin.users', ['users_data' => $users_data]);
    }
}
