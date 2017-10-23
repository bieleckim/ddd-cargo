<?php

namespace Cargo\Logistic\Domain\Entity;

use Cargo\Logistic\Domain\ValueObject\CargoId;

class HandlingEvent
{
    private $cargoId;
    private $completedAt;
    private $type;

    public function __construct(CargoId $cargoId, \DateTime $completedAt, string $type)
    {
        $this->cargoId = $cargoId;
        $this->completedAt = $completedAt;
        $this->type = $type;
    }

    public function getCargoId(): CargoId
    {
        return $this->cargoId;
    }

    public function getCompletedAt(): \DateTime
    {
        return $this->completedAt;
    }

    public function getType(): string
    {
        return $this->type;
    }
}
