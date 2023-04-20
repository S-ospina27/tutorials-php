<?php

namespace App\Http\Controllers;

use App\Models\CoursesModel;
use Carbon\Carbon;
use Database\Class\Tutorials\Courses;
use LionFiles\Store;
class CoursesController {
	private CoursesModel $coursesModel;
	private Courses $courses;

	public function __construct() {
		$this->coursesModel = new CoursesModel();
		$this->courses = new Courses();
	}

	private  function uploadImage() {
		$folder = "assets/img/courses/";
		Store::folder($folder);

		Store::upload(
			request->courses_path['tmp_name'],
			$this->courses->getCoursesPath(),
			$folder
		);
	}

	public function create() {
		$this->courses =Courses::formFields()
		->setCoursesRegistrationDate(Carbon::now()->format('Y-m-d'))
		->setCoursesPath(Store::rename(request->courses_path['name'], "IMG"));

		$responseCreate = $this->coursesModel->createDB($this->courses);
		$this->uploadImage();

		if ($responseCreate === "database-error") {
			return response->error("Ocurrio un error al registrar  el curso");
		}

		return response->success("Curso  registrado correctamente");

	}

	public function read() {
		return $this->coursesModel->readDB();
	}


	public function readTeacher($idusers) {
		return $this->coursesModel->readTeacherDB($idusers);
	}

	public function update() {

		$responseUpdate = $this->coursesModel->updateDB(
			Courses::formFields()->setCoursesRegistrationDate(Carbon::now()->format('Y-m-d'))
		);

		if ($responseUpdate === "database-error") {
			return response->error("Ocurrio un error al actualizar  el curso");
		}

		return response->success("Curso  actualizado correctamente");

	}


}