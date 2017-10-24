<?php

namespace Cargo\Logistic\Domain;

use Cargo\Logistic\Domain\Entity\Location;

interface LocationRepository
{
    public function findByPortCode(string $portCode): Location;

    public function findByCityName(string $cityName): Location;
}
