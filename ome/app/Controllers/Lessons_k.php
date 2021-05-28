<?php

namespace App\Controllers;
use App\Models\LessonModel;

class Lessons_k extends BaseController
{
	public function index($courseId, $courseNumber)
	{
		$lessonsInstance = new LessonModel($db);
		$lessons = $lessonsInstance->where('courseId',$courseId)->findAll();
		$lessons = array('lessons'=>$lessons, 'course'=>$courseNumber);	
		return view('lessons/index',$lessons) ;
	}

}
