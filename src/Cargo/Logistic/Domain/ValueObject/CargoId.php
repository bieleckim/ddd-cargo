<?php

namespace Cargo\Logistic\Domain\ValueObject;

class CargoId
{
    private $id;

    public function __construct(string $id)
    {
        $this->id = $id;
    }

    public function getId(): string
    {
        return $this->id;
    }
}
