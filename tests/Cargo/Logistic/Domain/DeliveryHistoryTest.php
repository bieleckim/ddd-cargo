<?php

namespace Cargo\Tests\Logistic\Domain;

use Cargo\Logistic\Domain\DeliveryHistory;
use Cargo\Logistic\Domain\Entity\HandlingEvent;
use PHPUnit\Framework\TestCase;

class DeliveryHistoryTest extends TestCase
{
    public function testEvents()
    {
        $handlingEvents = [
            $this->createMock(HandlingEvent::class)
        ];

        $history = new DeliveryHistory($handlingEvents);

        $this->assertEquals($handlingEvents, $history->getHandlingEvents());
    }
}
