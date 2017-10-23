<?php

namespace Cargo\Logistic\Domain;

class DeliveryHistory
{
    private $handlingEvents;

    public function __construct(array $handlingEvents)
    {
        $this->handlingEvents = $handlingEvents;
    }

    public function getHandlingEvents(): array
    {
        return $this->handlingEvents;
    }
}
