<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\Resource\ApiResourceCollection;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Validator;
use App\User;

class ProfileController extends ApiBaseController
{
	public function user(Request $request)
	{
		return new ApiResourceCollection($request->user()->toArray());
	}

	public function update(Request $request)
	{
        $user = $request->user();
		
		$user->fill($this->credentials($request));
		$user->update();

		return new ApiResourceCollection($request->user()->toArray());
	}

	protected function credentials(Request $request)
	{
		return $request->only('name', 'email');
	}
}
