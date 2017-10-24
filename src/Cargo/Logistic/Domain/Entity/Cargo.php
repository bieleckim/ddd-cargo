<?php

namespace Cargo\Logistic\Domain\Entity;

use Cargo\Logistic\Domain\ValueObject\CargoId;

class Cargo
{
    private $id;
    private $customer;

    public function __construct(CargoId $id, Customer $customer)
    {
        $this->id = $id;
        $this->customer = $customer;
    }

    public function getId(): CargoId
    {
        return $this->id;
    }

    public function getCustomer(): Customer
    {
        return $this->customer;
    }
}
