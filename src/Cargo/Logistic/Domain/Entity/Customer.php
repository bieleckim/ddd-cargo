<?php

namespace Cargo\Logistic\Domain\Entity;

class Customer
{
    private $id;
    private $name;
    private $cargo;

    public function __construct(string $id, string $name, Cargo $cargo)
    {
        $this->id = $id;
        $this->name = $name;
        $this->cargo = $cargo;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getCargo()
    {
        return $this->cargo;
    }
}
