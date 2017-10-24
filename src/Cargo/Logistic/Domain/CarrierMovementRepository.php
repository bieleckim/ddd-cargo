<?php

namespace Cargo\Logistic\Domain;

use Cargo\Logistic\Domain\Entity\CarrierMovement;
use Cargo\Logistic\Domain\Entity\Location;

interface CarrierMovementRepository
{
    public function findById(string $id): CarrierMovement;

    public function findByLocationFromTo(Location $locationFrom, Location $locationTo): CarrierMovement;
}
