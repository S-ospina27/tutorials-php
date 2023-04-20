<?php

namespace App\Models;

use Database\Class\Tutorials\Booking;
use LionSQL\Drivers\MySQL as DB;

class BookingModel {

	public function __construct() {
		
	}

	public function createDB(Booking $Booking) {
		return DB::call("create_booking",[
			$Booking->getIdcourses(),
			$Booking->getBookingDate(),
			$Booking->getBookingTime(),
			$Booking->getIdusers(),
			$Booking->getIdstates(),
		])->execute();
	}

	public function readDB($iduser) {
		return DB::view("read_booking")->select()->where(DB::equalTo("idusers"),$iduser)->getAll();
	}

	public function updateDB(Booking $Booking) {
		return DB::call("update_booking",[
			$Booking->getIdcourses(),
			$Booking->getBookingDate(),
			$Booking->getBookingTime(),
			$Booking->getIdstates(),
			$Booking->getIdbooking()
		])->execute();
	}


	public function deactivateReservationDB($codigoBooking){
		return DB::call("deactivateReservation",[
			$codigoBooking
		])->execute();
	}
}