<?php

namespace App\Http\Controllers;

use App\Models\BookingModel;
use Database\Class\Tutorials\Booking;

class BookingController {
	private BookingModel $bookingModel;

	public function __construct() {
		$this->bookingModel = new BookingModel();
	}

	public function create() {
		$responseCreate = $this->bookingModel->createDB(Booking::formFields()->setIdstates(1));

		if ($responseCreate === "database-error") {
			return response->error("Ocurrio un error al registrar  la reserva");
		}

		return response->success("Reserva  registrado correctamente");

	}

	public function read($iduser) {
		return $this->bookingModel->readDB($iduser);
	}

	public function update() {

		$responseUpdate = $this->bookingModel->updateDB(Booking::formFields());

		if ($responseUpdate === "database-error") {
			return response->error("Ocurrio un error al actualizar  la reserva");
		}

		return response->success("Reserva  actualizada correctamente");
	}

	public function deactivateReservationDB(){
		$responseDeactivateReservation =$this->bookingModel->deactivateReservationDB(request->idbooking);

		if ($responseDeactivateReservation === "database-error") {
			return response->error("Ocurrio un error al desactivar la reserva  la reserva");
		}

		return response->success("Reserva  desactivada correctamente");

	}

}