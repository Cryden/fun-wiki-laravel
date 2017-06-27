<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Auth;
use Socialite;

use App\User;
use App\UserProvider;
use App\UserData;

class AuthController extends Controller
{

    /**
     * Redirect the user to the OAuth Provider.
     *
     * @return Response
     */
    protected $redirectTo = '/home';

    public function __construct()
    {
       $user = Auth::user();
    }

    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    /**
     * Obtain the user information from provider.  Check if the user already exists in our
     * database by looking up their provider_id in the database.
     * If the user exists, log them in. Otherwise, create a new user then log them in. After that 
     * redirect them to the authenticated users homepage.
     *
     * @return Response
     */

    public function handleProviderCallback($provider)
    {
        $getUser = Socialite::driver($provider)->user();

        //dd($getUser);

        $user = $this->findOrCreateUser($getUser, $provider);

        Auth::login($user, true);
        return redirect($this->redirectTo);
    }

    /**
     * If a user has registered before using social auth, return the user
     * else, create a new user object.
     * @param  $user Socialite user object
     * @param $provider Social auth provider
     * @return  User
     */

    public function findOrCreateUser($user, $provider)
    {
        
        $userProvider = UserProvider::where('provider_id', $user->id)->first();
        
        if (isset($userProvider)) {
            $user = User::where('id', $userProvider->user_id)->first();
            return $user;
        }

        $user_auth = User::where('email', $user->getEmail())->first();

        if (!$user_auth) {
            $user_auth = User::createByProvider($user);
        }

        $account = new UserProvider([
            'provider_id' => $user->getId(),
            'provider' => $provider]);
            
        $account->user()->associate($user_auth);
        $account->save();

        $user_slug = 'id'.str_pad($user_auth->id, 10, "0", STR_PAD_LEFT);
        $user_name = $user->getName();

        if (!UserData::where('user_slug', $user_slug)->first()) {
            $account = new UserData([
                'user_slug'     => $user_slug,
                'user_name'     => $user_name,
                'user_photo'    => $user->getAvatar(),
            ]);
                
            $account->user()->associate($user_auth);
            $account->save();
        }

        return $user_auth;
    }
}
