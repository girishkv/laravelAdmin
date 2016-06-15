<?php namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Validator;
use App\User;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Config;

class AuthController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Registration & Login Controller
	|--------------------------------------------------------------------------
	|
	| This controller handles the registration of new users, as well as the
	| authentication of existing users. By default, this controller uses
	| a simple trait to add these behaviors. Why don't you explore it?
	|
	*/

	use AuthenticatesAndRegistersUsers;

	/**
	 * Create a new authentication controller instance.
	 *
	 * @param  \Illuminate\Contracts\Auth\Guard  $auth
	 * @return void
	 */
	public function __construct(Guard $auth)
	{
		$this->auth = $auth;
		$this->middleware('guest', ['except' => 'getLogout']);
	}



	public function validator(array $data)
	{
		return \Validator::make($data, [
			'name' 		=> 'required|max:255',
			'email' 	=> 'required|email|max:255|unique:users',
			'password' 	=> 'required|confirmed|min:6',
		]);
	}

	/**
	 * Create a new user instance after a valid registration.
	 *
	 * @param  array  $data
	 * @return User
	 */
	public function create(array $data)
	{
		if (!Config::get('auth.registration_open'))
		{
			abort(403, trans('auth.registration_closed'));
		}

		return User::create([
			'name' 		=> $data['name'],
			'email' 	=> $data['email'],
			'password' 	=> $data['password'],
		]);
	}

	/**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function getRegister()
    {
    	if (!Config::get('auth.registration_open'))
		{
			abort(403, trans('auth.registration_closed'));
		}

        return view('auth.register');
    }

}
