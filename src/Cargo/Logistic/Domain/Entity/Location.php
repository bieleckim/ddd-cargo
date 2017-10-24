<?php

namespace Cargo\Logistic\Domain\Entity;

class Location
{
    private $id;
    private $portCode;
    private $cityName;

    public function __construct(string $id, string $portCode, string $cityName)
    {
        $this->id = $id;
        $this->portCode = $portCode;
        $this->cityName = $cityName;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getPortCode()
    {
        return $this->portCode;
    }

    public function getCityName()
    {
        return $this->cityName;
    }
}
