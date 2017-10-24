<?php

namespace Cargo\Logistic\Domain;

use Cargo\Logistic\Domain\Entity\Customer;
use Cargo\Logistic\Domain\ValueObject\CargoId;

interface CustomerRepository
{
    public function findByCustomerId(string $customerId): Customer;

    public function findByName(string $name): Customer;

    public function findByCargoId(CargoId $cargoId): Customer;
}
