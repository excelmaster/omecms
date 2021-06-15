<?php

namespace App\Controllers;

class Content extends BaseController
{
	public function index($site, $objectId, $lessonId, $courseNumber, $lessonNumber, $courseId, $tipo, $activity)
	{
		$contentData = array(
			'objectId' => $objectId, 
			'course' => $courseNumber, 
			'lesson' => $lessonNumber, 
			'courseId' => $courseId,
			'lessonId' => $lessonId,
			'tipo' => $tipo,
			'activity' => $activity,
			'site' => $site
		);
		return view('content/index', $contentData);
	}
}
