<?php

namespace Inc;

interface RegisteredVehicle {
    // Constante
    const LICENSE_PLATE_PATTERN = '/^[A-Z]{2}[- ]?[0-9]{4}$/';

    // Ajout d'une methode a implementer

    /** @param string $licensePlate */
    public function register($licensePlate);

    public function firstRegistered();

}
