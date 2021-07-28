<?php

namespace App\Controllers;
use App\Models\CourseModel;

class Test extends BaseController
{
	public function index($site)
	{
		//MoodleSession
		set_cookie('MoodleSession','beto');
		$data = array('site'=> $site);
		return view('test/index', $data);		
	}
}
