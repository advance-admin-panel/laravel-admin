<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
	public function __construct() 
	{
		$this->middleware('auth:admin');
	}

	public function index()
	{
		return view('admin.settings.index');
	}
}
