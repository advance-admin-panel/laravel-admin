<?php

namespace App\Http\Controllers\Api;

use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\ProjectController;
use Illuminate\Http\Request;
use Validator;

/**
 * @author shohid <sohidurr49@gmail.com>
 */
class ApiBaseController extends ProjectController
{
	/** @var error message **/
	protected $errorMessage = '';
	
	/**
	 * Handle a success response for a current request
	 *
	 * @param  mixed $data
     * @param  string $message
	 * @return \Illuminate\Http\Response
	 */
	public function successResponse(
				$data = [], string $message = 'success')
	{
		return response()->json([
				'success' => true,
		        'message' => $message,
		        'data' => $data ?? null
			]);
	}
	/**
	 * Handle a failed response for a current request
	 *
	 * @param  mixed $data
     * @param  string $message
	 * @return \Illuminate\Http\Response
	 */
	public function errorResponse($data = [], string $message = 'failed')
	{
		$data = ! is_array($data) ? json_decode($data, true) : $data;

		foreach ($data as $key => $value) {
			$this->errorMessage .= " ". ($data[$key][0] ?? '').'\n';
		}

		return response()->json([
				'success' => false,
		        'message' => $message,
		        'errors' => !empty($this->errorMessage) ? trim($this->errorMessage) : $message,
		        'data' => null,
			]);
	}
	/**
	 * Handle a failed response for a current request
	 *
	 * @param  mixed $data
     * @param  string $message
	 * @return \Illuminate\Http\Response
	 */
	public function reserveResponse($data = [], string $message = 'Comming Soon')
	{
		return response()->json([
				'success' => false,
		        'message' => $message,
		        'errors' => $message,
		        'data' => $data ?? null,
			]);
	}
}