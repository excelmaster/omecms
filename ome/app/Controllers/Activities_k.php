<?php

namespace App\Controllers;
use App\Models\ActivityModel;

class Activities_k extends BaseController
{
	public function index($lessonId, $courseNumber, $lessonNumber, $courseId)
	{
		$ActivitiesInstance = new ActivityModel($db);
		$activities = $ActivitiesInstance->where('lessonId',$lessonId)->findAll();
		$activities = array('lessons'=>$activities, 'course'=>$courseNumber, 'lesson'=>$lessonNumber, 'courseId'=>$courseId);			
		return view('activities/index',$activities) ;
	}

}
