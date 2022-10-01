<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Routing\Controller as BaseController;
use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends BaseController 
{
	public function dashboard(Request $request)
	{
		$user = Auth::user();

		return Inertia::render('Dashboard');
	}
}