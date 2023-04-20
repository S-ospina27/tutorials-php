<?php

namespace Database\Class\Tutorials;

class ReadBooking implements \JsonSerializable {

	private ?int $idbooking = null;
	private ?int $idcourses = null;
	private ?string $booking_date = null;
	private ?int $idusers = null;
	private ?int $idstates = null;
	private ?string $courses_name = null;
	private ?string $states_name = null;

	public function __construct() {

	}

	public function jsonSerialize(): mixed {
		return get_object_vars($this);
	}

	public static function formFields(): ReadBooking {
		$readbooking = new ReadBooking();

		$readbooking->setIdbooking(
			isset(request->idbooking) ? request->idbooking : null
		);

		$readbooking->setIdcourses(
			isset(request->idcourses) ? request->idcourses : null
		);

		$readbooking->setBookingDate(
			isset(request->booking_date) ? request->booking_date : null
		);

		$readbooking->setIdusers(
			isset(request->idusers) ? request->idusers : null
		);

		$readbooking->setIdstates(
			isset(request->idstates) ? request->idstates : null
		);

		$readbooking->setCoursesName(
			isset(request->courses_name) ? request->courses_name : null
		);

		$readbooking->setStatesName(
			isset(request->states_name) ? request->states_name : null
		);

		return $readbooking;
	}

	public function getIdbooking(): ?int {
		return $this->idbooking;
	}

	public function setIdbooking(?int $idbooking): ReadBooking {
		$this->idbooking = $idbooking;
		return $this;
	}

	public function getIdcourses(): ?int {
		return $this->idcourses;
	}

	public function setIdcourses(?int $idcourses): ReadBooking {
		$this->idcourses = $idcourses;
		return $this;
	}

	public function getBookingDate(): ?string {
		return $this->booking_date;
	}

	public function setBookingDate(?string $booking_date): ReadBooking {
		$this->booking_date = $booking_date;
		return $this;
	}

	public function getIdusers(): ?int {
		return $this->idusers;
	}

	public function setIdusers(?int $idusers): ReadBooking {
		$this->idusers = $idusers;
		return $this;
	}

	public function getIdstates(): ?int {
		return $this->idstates;
	}

	public function setIdstates(?int $idstates): ReadBooking {
		$this->idstates = $idstates;
		return $this;
	}

	public function getCoursesName(): ?string {
		return $this->courses_name;
	}

	public function setCoursesName(?string $courses_name): ReadBooking {
		$this->courses_name = $courses_name;
		return $this;
	}

	public function getStatesName(): ?string {
		return $this->states_name;
	}

	public function setStatesName(?string $states_name): ReadBooking {
		$this->states_name = $states_name;
		return $this;
	}

}