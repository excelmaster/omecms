<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\CourseModel;

class Modulos_k extends BaseController
{
	public function index()
	{
		$courseInstance = new CourseModel($db);
		$courses = $courseInstance->findAll();
		$courses = array('courses'=>$courses);		
		return view('modulos/index',$courses);
	}
}
