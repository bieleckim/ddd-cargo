<?php

namespace Cargo\Logistic\Domain\Entity;

class CarrierMovement
{
    private $id;
    private $locationFrom;
    private $locationTo;

    public function __construct(string $id, Location $locationFrom, Location $locationTo)
    {
        $this->id = $id;
        $this->locationFrom = $locationFrom;
        $this->locationTo = $locationTo;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getLocationFrom(): Location
    {
        return $this->locationFrom;
    }

    public function getLocationTo(): Location
    {
        return $this->locationTo;
    }
}
