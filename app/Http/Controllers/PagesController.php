<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
	# stripe
	public function stripe()
	{
		return view('stripe.index');
	}
}
