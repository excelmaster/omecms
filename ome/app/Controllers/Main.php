<?php

namespace App\Controllers;
use App\Models\CourseModel;

class Main extends BaseController
{
	public function index()
	{
		return view('main/index');
	}
}
