<?php

namespace App\Controllers;
use App\Models\CourseModel;

class Courses_k extends BaseController
{
	public function index()
	{
		$courseInstance = new CourseModel($db);
		$courses = $courseInstance->findAll();
		$courses = array('courses'=>$courses, 'courseId'=>'1');
		return view('courses/index',$courses);
	}
}
