<?php

namespace Database\Class\Tutorials;

class Booking implements \JsonSerializable {

	private ?int $idbooking = null;
	private ?int $idcourses = null;
	private ?string $booking_date = null;
	private ?string $booking_time = null;
	private ?int $idusers = null;
	private ?int $idstates = null;

	public function __construct() {

	}

	public function jsonSerialize(): mixed {
		return get_object_vars($this);
	}

	public static function formFields(): Booking {
		$booking = new Booking();

		$booking->setIdbooking(
			isset(request->idbooking) ? request->idbooking : null
		);

		$booking->setIdcourses(
			isset(request->idcourses) ? request->idcourses : null
		);

		$booking->setBookingDate(
			isset(request->booking_date) ? request->booking_date : null
		);

		$booking->setBookingTime(
			isset(request->booking_time) ? request->booking_time : null
		);

		$booking->setIdusers(
			isset(request->idusers) ? request->idusers : null
		);

		$booking->setIdstates(
			isset(request->idstates) ? request->idstates : null
		);

		return $booking;
	}

	public function getIdbooking(): ?int {
		return $this->idbooking;
	}

	public function setIdbooking(?int $idbooking): Booking {
		$this->idbooking = $idbooking;
		return $this;
	}

	public function getIdcourses(): ?int {
		return $this->idcourses;
	}

	public function setIdcourses(?int $idcourses): Booking {
		$this->idcourses = $idcourses;
		return $this;
	}

	public function getBookingDate(): ?string {
		return $this->booking_date;
	}

	public function setBookingDate(?string $booking_date): Booking {
		$this->booking_date = $booking_date;
		return $this;
	}

	public function getBookingTime(): ?string {
		return $this->booking_time;
	}

	public function setBookingTime(?string $booking_time): Booking {
		$this->booking_time = $booking_time;
		return $this;
	}

	public function getIdusers(): ?int {
		return $this->idusers;
	}

	public function setIdusers(?int $idusers): Booking {
		$this->idusers = $idusers;
		return $this;
	}

	public function getIdstates(): ?int {
		return $this->idstates;
	}

	public function setIdstates(?int $idstates): Booking {
		$this->idstates = $idstates;
		return $this;
	}

}