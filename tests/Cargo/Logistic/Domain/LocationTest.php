<?php

namespace Cargo\Tests\Logistic\Domain;

use Cargo\Logistic\Domain\Location;
use PHPUnit\Framework\TestCase;

class LocationTest extends TestCase
{
    public function testLocation()
    {
        $id = 'sample-id';
        $location = new Location($id);
        $this->assertEquals($id, $location->getId());
    }
}
