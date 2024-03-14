<?php

namespace App\Http\Controllers\Hm;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
		return view('hm.index');
	}
}
