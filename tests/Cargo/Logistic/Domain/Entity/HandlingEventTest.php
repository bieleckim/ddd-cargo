<?php

namespace Cargo\Tests\Logistic\Domain\Entity;

use Cargo\Logistic\Domain\Entity\CarrierMovement;
use Cargo\Logistic\Domain\Entity\HandlingEvent;
use Cargo\Logistic\Domain\ValueObject\CargoId;
use PHPUnit\Framework\TestCase;

class HandlingEventTest extends TestCase
{
    public function testEvent()
    {
        $cargoId = $this->createMock(CargoId::class);
        $completedAt = $this->createMock(\DateTime::class);
        $type = 'someType';
        $movement = $this->createMock(CarrierMovement::class);

        $event = new HandlingEvent($cargoId, $completedAt, $type, $movement);

        $this->assertEquals($cargoId, $event->getCargoId());
        $this->assertEquals($completedAt, $event->getCompletedAt());
        $this->assertEquals($type, $event->getType());
        $this->assertEquals($movement, $event->getCarrierMovement());
    }
}
