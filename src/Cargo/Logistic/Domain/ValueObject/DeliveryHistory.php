<?php

namespace Cargo\Logistic\Domain\ValueObject;

use Cargo\Logistic\Domain\Entity\Cargo;

class DeliveryHistory
{
    private $cargo;
    private $handlingEvents;

    public function __construct(Cargo $cargo, array $handlingEvents)
    {
        $this->cargo = $cargo;
        $this->handlingEvents = $handlingEvents;
    }

    public function getCargo(): Cargo
    {
        return $this->cargo;
    }

    public function getHandlingEvents(): array
    {
        return $this->handlingEvents;
    }
}
