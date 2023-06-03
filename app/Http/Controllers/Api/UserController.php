<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\Resource\ApiResourceCollection;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\User;
use Validator;

class UserController extends ApiBaseController
{
	public function login(Request $request)
	{
		$validator = Validator::make($request->all(),[
            'email' => 'required|string',
            'password' => 'required|string',
        ]);

		if($validator->fails())
		{
			return $this->errorResponse($validator->messages());
		}

		if(! $this->attemptLogin($request))
		{
			return optional(new ApiResourceCollection([]))->message("Credeantials doesn't match");
		}

        $this->setAccessToken($request->user());

		return new ApiResourceCollection($request->user()->toArray());

	}

	public function register(Request $request)
	{
		$validator = Validator::make($request->all(),[
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
        ]);

		if($validator->fails())
		{
			return $this->errorResponse($validator->messages());
        }

		event(new Registered($user = $this->create($request->all())));

		$this->guard()->login($user);

        $this->setAccessToken($request->user());

		return new ApiResourceCollection($request->user()->toArray());
	}

	/**
     * Attempt to logout the user into the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return bool
     */
	public function logout(Request $request)
	{
		$request->user()->tokens()->delete();

        return $this->successResponse([], 'Successfully logout');
	}

	/**
     * Attempt to log the user into the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return bool
     */
    protected function attemptLogin(Request $request)
    {
        return $this->guard()->attempt(
            $request->only('email', 'password')
        );
    }

    /**
     * Get the guard to be used during registration.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard();
    }

    protected function setAccessToken($user)
    {
        $user->access_token = $user->createToken(Str::random(60))->plainTextToken;
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'] ?? '',
            'email' => $data['email'] ?? 0,
            'is_admin' => 0,
            'password' => Hash::make($data['password']) ?? '',
        ]);
    }
}
