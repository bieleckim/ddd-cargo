<?php

namespace Cargo\Logistic\Domain\Entity;

use Cargo\Logistic\Domain\ValueObject\CargoId;

class Cargo
{
    private $id;

    public function __construct(CargoId $id)
    {
        $this->id = $id;
    }

    public function getId(): CargoId
    {
        return $this->id;
    }
}
