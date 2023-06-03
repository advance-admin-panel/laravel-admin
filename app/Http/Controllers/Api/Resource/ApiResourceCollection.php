<?php

namespace App\Http\Controllers\Api\Resource;

use Illuminate\Http\Resources\Json\ResourceCollection;
use App\Http\Controllers\Api\Concerns\Collection;

/**
 * @author shohid <sohidurr49@gmail.com>
 */
class ApiResourceCollection extends ResourceCollection
{
	use Collection;

	/**
	 * Transform the resource collection into an array.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return array
	 */
	public function toArray($request)
	{
		$message = $this->message ?? (count($this->collection) > 0 ? 'success' : 'We didn\'t find any result');

		$success = true;

	    return [
	        'success' => $success,
	        'message' => $message,
	        'data' => $this->data(),
	    ];
	}

	/**
	 * Handel collection data
	 *
	 * @return mixed
	 */
	protected function data()
	{
		return count($this->collection) > 0 ? $this->collection : null;
	}
}
