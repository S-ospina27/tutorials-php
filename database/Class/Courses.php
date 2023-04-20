<?php

namespace Database\Class;

class Courses implements \JsonSerializable {

	private ?int $idcourses = null;
	private ?string $courses_name = null;
	private ?string $courses_level = null;
	private ?string $courses_description = null;
	private ?string $courses_registration_date = null;
	private ?int $idusers = null;
	private ?string $courses_path = null;

	public function __construct() {

	}

	public function jsonSerialize(): mixed {
		return get_object_vars($this);
	}

	public static function formFields(): Courses {
		$courses = new Courses();

		$courses->setIdcourses(
			isset(request->idcourses) ? request->idcourses : null
		);

		$courses->setCoursesName(
			isset(request->courses_name) ? request->courses_name : null
		);

		$courses->setCoursesLevel(
			isset(request->courses_level) ? request->courses_level : null
		);

		$courses->setCoursesDescription(
			isset(request->courses_description) ? request->courses_description : null
		);

		$courses->setCoursesRegistrationDate(
			isset(request->courses_registration_date) ? request->courses_registration_date : null
		);

		$courses->setIdusers(
			isset(request->idusers) ? request->idusers : null
		);

		$courses->setCoursesPath(
			isset(request->courses_path) ? request->courses_path : null
		);

		return $courses;
	}

	public function getIdcourses(): ?int {
		return $this->idcourses;
	}

	public function setIdcourses(?int $idcourses): Courses {
		$this->idcourses = $idcourses;
		return $this;
	}

	public function getCoursesName(): ?string {
		return $this->courses_name;
	}

	public function setCoursesName(?string $courses_name): Courses {
		$this->courses_name = $courses_name;
		return $this;
	}

	public function getCoursesLevel(): ?string {
		return $this->courses_level;
	}

	public function setCoursesLevel(?string $courses_level): Courses {
		$this->courses_level = $courses_level;
		return $this;
	}

	public function getCoursesDescription(): ?string {
		return $this->courses_description;
	}

	public function setCoursesDescription(?string $courses_description): Courses {
		$this->courses_description = $courses_description;
		return $this;
	}

	public function getCoursesRegistrationDate(): ?string {
		return $this->courses_registration_date;
	}

	public function setCoursesRegistrationDate(?string $courses_registration_date): Courses {
		$this->courses_registration_date = $courses_registration_date;
		return $this;
	}

	public function getIdusers(): ?int {
		return $this->idusers;
	}

	public function setIdusers(?int $idusers): Courses {
		$this->idusers = $idusers;
		return $this;
	}

	public function getCoursesPath(): ?string {
		return $this->courses_path;
	}

	public function setCoursesPath(?string $courses_path): Courses {
		$this->courses_path = $courses_path;
		return $this;
	}

}