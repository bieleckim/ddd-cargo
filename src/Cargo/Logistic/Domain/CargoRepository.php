<?php

namespace Cargo\Logistic\Domain;

use Cargo\Logistic\Domain\Entity\Cargo;
use Cargo\Logistic\Domain\ValueObject\CargoId;

interface CargoRepository
{
    public function findByCargoId(CargoId $cargoId): Cargo;

    public function findByCustomerId(string $customerId): Cargo;
}
