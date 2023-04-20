<?php

namespace Database\Class\Tutorials;

class ReadBookingUsers implements \JsonSerializable {

	private ?int $idbooking = null;
	private ?int $idcourses = null;
	private ?string $booking_date = null;
	private ?string $booking_time = null;
	private ?int $idusers = null;
	private ?int $idstates = null;
	private ?string $courses_name = null;
	private ?string $users_name = null;
	private ?string $states_name = null;

	public function __construct() {

	}

	public function jsonSerialize(): mixed {
		return get_object_vars($this);
	}

	public static function formFields(): ReadBookingUsers {
		$readbookingusers = new ReadBookingUsers();

		$readbookingusers->setIdbooking(
			isset(request->idbooking) ? request->idbooking : null
		);

		$readbookingusers->setIdcourses(
			isset(request->idcourses) ? request->idcourses : null
		);

		$readbookingusers->setBookingDate(
			isset(request->booking_date) ? request->booking_date : null
		);

		$readbookingusers->setBookingTime(
			isset(request->booking_time) ? request->booking_time : null
		);

		$readbookingusers->setIdusers(
			isset(request->idusers) ? request->idusers : null
		);

		$readbookingusers->setIdstates(
			isset(request->idstates) ? request->idstates : null
		);

		$readbookingusers->setCoursesName(
			isset(request->courses_name) ? request->courses_name : null
		);

		$readbookingusers->setUsersName(
			isset(request->users_name) ? request->users_name : null
		);

		$readbookingusers->setStatesName(
			isset(request->states_name) ? request->states_name : null
		);

		return $readbookingusers;
	}

	public function getIdbooking(): ?int {
		return $this->idbooking;
	}

	public function setIdbooking(?int $idbooking): ReadBookingUsers {
		$this->idbooking = $idbooking;
		return $this;
	}

	public function getIdcourses(): ?int {
		return $this->idcourses;
	}

	public function setIdcourses(?int $idcourses): ReadBookingUsers {
		$this->idcourses = $idcourses;
		return $this;
	}

	public function getBookingDate(): ?string {
		return $this->booking_date;
	}

	public function setBookingDate(?string $booking_date): ReadBookingUsers {
		$this->booking_date = $booking_date;
		return $this;
	}

	public function getBookingTime(): ?string {
		return $this->booking_time;
	}

	public function setBookingTime(?string $booking_time): ReadBookingUsers {
		$this->booking_time = $booking_time;
		return $this;
	}

	public function getIdusers(): ?int {
		return $this->idusers;
	}

	public function setIdusers(?int $idusers): ReadBookingUsers {
		$this->idusers = $idusers;
		return $this;
	}

	public function getIdstates(): ?int {
		return $this->idstates;
	}

	public function setIdstates(?int $idstates): ReadBookingUsers {
		$this->idstates = $idstates;
		return $this;
	}

	public function getCoursesName(): ?string {
		return $this->courses_name;
	}

	public function setCoursesName(?string $courses_name): ReadBookingUsers {
		$this->courses_name = $courses_name;
		return $this;
	}

	public function getUsersName(): ?string {
		return $this->users_name;
	}

	public function setUsersName(?string $users_name): ReadBookingUsers {
		$this->users_name = $users_name;
		return $this;
	}

	public function getStatesName(): ?string {
		return $this->states_name;
	}

	public function setStatesName(?string $states_name): ReadBookingUsers {
		$this->states_name = $states_name;
		return $this;
	}

}