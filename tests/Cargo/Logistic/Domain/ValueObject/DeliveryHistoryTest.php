<?php

namespace Cargo\Tests\Logistic\Domain\ValueObject;

use Cargo\Logistic\Domain\Entity\Cargo;
use Cargo\Logistic\Domain\ValueObject\DeliveryHistory;
use Cargo\Logistic\Domain\Entity\HandlingEvent;
use PHPUnit\Framework\TestCase;

class DeliveryHistoryTest extends TestCase
{
    public function testEvents()
    {
        $cargo = $this->createMock(Cargo::class);
        $handlingEvents = [
            $this->createMock(HandlingEvent::class)
        ];

        $history = new DeliveryHistory($cargo, $handlingEvents);

        $this->assertEquals($handlingEvents, $history->getHandlingEvents());
        $this->assertEquals($cargo, $history->getCargo());
    }
}
