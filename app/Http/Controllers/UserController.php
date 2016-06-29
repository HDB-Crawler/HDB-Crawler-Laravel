<?php
namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
	public function postSignUp(Request $request)
	{
		$email = $request['su_email'];
		$name = $request['su_name'];
		$password = bcrypt($request['su_password']);

		$user = new User();
		$user->email = $email;
		$user->name = $name;
		$user->password = $password;

		$user->save();

		Auth::login($user);

		return redirect()->route('dashboard');
	}

	public function postSignIn(Request $request)
	{
		if (Auth::attempt([
			'email' => $request['si_email'],
			'password' => $request['si_password']
		])) {
			return redirect()->route('dashboard');
		}
		return redirect()->back();
	}
}