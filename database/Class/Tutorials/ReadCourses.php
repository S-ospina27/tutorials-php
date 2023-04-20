<?php

namespace Database\Class\Tutorials;

class ReadCourses implements \JsonSerializable {

	private ?int $idcourses = null;
	private ?string $courses_name = null;
	private ?string $courses_level = null;
	private ?string $courses_description = null;
	private ?string $courses_registration_date = null;
	private ?int $idusers = null;
	private ?string $courses_path = null;
	private ?string $users_name = null;
	private ?string $users_email = null;

	public function __construct() {

	}

	public function jsonSerialize(): mixed {
		return get_object_vars($this);
	}

	public static function formFields(): ReadCourses {
		$readcourses = new ReadCourses();

		$readcourses->setIdcourses(
			isset(request->idcourses) ? request->idcourses : null
		);

		$readcourses->setCoursesName(
			isset(request->courses_name) ? request->courses_name : null
		);

		$readcourses->setCoursesLevel(
			isset(request->courses_level) ? request->courses_level : null
		);

		$readcourses->setCoursesDescription(
			isset(request->courses_description) ? request->courses_description : null
		);

		$readcourses->setCoursesRegistrationDate(
			isset(request->courses_registration_date) ? request->courses_registration_date : null
		);

		$readcourses->setIdusers(
			isset(request->idusers) ? request->idusers : null
		);

		$readcourses->setCoursesPath(
			isset(request->courses_path) ? request->courses_path : null
		);

		$readcourses->setUsersName(
			isset(request->users_name) ? request->users_name : null
		);

		$readcourses->setUsersEmail(
			isset(request->users_email) ? request->users_email : null
		);

		return $readcourses;
	}

	public function getIdcourses(): ?int {
		return $this->idcourses;
	}

	public function setIdcourses(?int $idcourses): ReadCourses {
		$this->idcourses = $idcourses;
		return $this;
	}

	public function getCoursesName(): ?string {
		return $this->courses_name;
	}

	public function setCoursesName(?string $courses_name): ReadCourses {
		$this->courses_name = $courses_name;
		return $this;
	}

	public function getCoursesLevel(): ?string {
		return $this->courses_level;
	}

	public function setCoursesLevel(?string $courses_level): ReadCourses {
		$this->courses_level = $courses_level;
		return $this;
	}

	public function getCoursesDescription(): ?string {
		return $this->courses_description;
	}

	public function setCoursesDescription(?string $courses_description): ReadCourses {
		$this->courses_description = $courses_description;
		return $this;
	}

	public function getCoursesRegistrationDate(): ?string {
		return $this->courses_registration_date;
	}

	public function setCoursesRegistrationDate(?string $courses_registration_date): ReadCourses {
		$this->courses_registration_date = $courses_registration_date;
		return $this;
	}

	public function getIdusers(): ?int {
		return $this->idusers;
	}

	public function setIdusers(?int $idusers): ReadCourses {
		$this->idusers = $idusers;
		return $this;
	}

	public function getCoursesPath(): ?string {
		return $this->courses_path;
	}

	public function setCoursesPath(?string $courses_path): ReadCourses {
		$this->courses_path = $courses_path;
		return $this;
	}

	public function getUsersName(): ?string {
		return $this->users_name;
	}

	public function setUsersName(?string $users_name): ReadCourses {
		$this->users_name = $users_name;
		return $this;
	}

	public function getUsersEmail(): ?string {
		return $this->users_email;
	}

	public function setUsersEmail(?string $users_email): ReadCourses {
		$this->users_email = $users_email;
		return $this;
	}

}