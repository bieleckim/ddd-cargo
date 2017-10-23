<?php

namespace Cargo\Logistic\Domain\Entity;

use Cargo\Logistic\Domain\ValueObject\CargoId;

class HandlingEvent
{
    private $cargoId;
    private $completedAt;
    private $type;
    private $carrierMovement;

    public function __construct(CargoId $cargoId, \DateTime $completedAt, string $type, CarrierMovement $carrierMovement)
    {
        $this->cargoId = $cargoId;
        $this->completedAt = $completedAt;
        $this->type = $type;
        $this->carrierMovement = $carrierMovement;
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

    public function getCarrierMovement(): CarrierMovement
    {
        return $this->carrierMovement;
    }
}
