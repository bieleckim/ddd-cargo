<?php

namespace Cargo\Tests\Logistic\Domain\ValueObject;

use Cargo\Logistic\Domain\ValueObject\DeliveryHistory;
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
