<?php

namespace App\Controllers;

class Content extends BaseController
{
	public function index($objectId, $lessonId, $courseNumber, $lessonNumber, $courseId, $tipo, $activity)
	{
		$contentData = array(
			'objectId' => $objectId, 
			'course' => $courseNumber, 
			'lesson' => $lessonNumber, 
			'courseId' => $courseId,
			'lessonId' => $lessonId,
			'tipo' => $tipo,
			'activity' => $activity
		);
		return view('content/index', $contentData);
	}
}
