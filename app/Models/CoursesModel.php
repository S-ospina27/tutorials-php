<?php

namespace App\Models;

use Database\Class\Tutorials\Courses;
use LionSQL\Drivers\MySQL as DB;

use function PHPUnit\Framework\equalTo;

class CoursesModel {

	public function __construct() {
		
	}

	public function createDB(Courses $courses) {
		return DB::call("create_courses",[
			$courses->getCoursesName(),
			$courses->getCoursesLevel(),
			$courses->getCoursesDescription(),
			$courses->getCoursesRegistrationDate(),
			$courses->getIdusers(),
			$courses->getCoursesPath()
		])->execute();
	}

	public function readDB() {
		return DB::view("read_courses")->select()->getAll();
	}

	public function readTeacherDB($idusers){
		return DB::view("read_courses")->select()->where(DB::equalTo("idusers"),$idusers)->getAll();
	}

	public function updateDB(Courses $courses) {
		return DB::call("update_courses",[
			$courses->getCoursesName(),
			$courses->getCoursesLevel(),
			$courses->getCoursesDescription(),
			$courses->getCoursesRegistrationDate(),
			$courses->getIdcourses()
		])->execute();

	}


}