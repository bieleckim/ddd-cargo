<?php

namespace Cargo\Tests\Logistic\Domain\Entity;

use Cargo\Logistic\Domain\Entity\Location;
use PHPUnit\Framework\TestCase;

class LocationTest extends TestCase
{
    public function testLocation()
    {
        $id = 'sample-id';
        $portCode = 'sample-port-code';
        $cityName = 'sample-city-name';

        $location = new Location($id, $portCode, $cityName);

        $this->assertEquals($id, $location->getId());
        $this->assertEquals($portCode, $location->getPortCode());
        $this->assertEquals($cityName, $location->getCityName());
    }
}
