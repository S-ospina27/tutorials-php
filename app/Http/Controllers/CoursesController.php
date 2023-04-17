<?php

namespace App\Http\Controllers;

use App\Models\CoursesModel;
use Carbon\Carbon;
use Database\Class\Tutorials\Courses;

class CoursesController {
	private CoursesModel $coursesModel;

	public function __construct() {
		$this->coursesModel = new CoursesModel();
	}

	public function create() {
		$responseCreate = $this->coursesModel->createDB(
			Courses::formFields()->setCoursesRegistrationDate(Carbon::now()->format('Y-m-d'))
		);

		if ($responseCreate === "database-error") {
			return response->error("Ocurrio un error al registrar  el curso");
		}

		return response->success("Curso  registrado correctamente");

	}

	public function read() {

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