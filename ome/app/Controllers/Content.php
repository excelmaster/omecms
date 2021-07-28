<?php

namespace App\Controllers;

class Content extends BaseController
{
	public function index($site, $objectId, $lessonId, $courseNumber, $lessonNumber, $courseId, $tipo, $activity, $Source)
	{
		$contentData = array(
			'objectId' => $objectId, 
			'course' => $courseNumber, 
			'lesson' => $lessonNumber, 
			'courseId' => $courseId,
			'lessonId' => $lessonId,
			'tipo' => $tipo,
			'activity' => $activity,
			'site' => $site,
			'source' => $Source
		);
		return view('content/index', $contentData);
	}
}
