<?php

namespace Cargo\Tests\Logistic\Domain\ValueObject;

use Cargo\Logistic\Domain\ValueObject\CargoId;
use PHPUnit\Framework\TestCase;

class CargoIdTest extends TestCase
{
    public function testId()
    {
        $id = 'sample-id';
        $cargoId = new CargoId($id);
        $this->assertEquals($id, $cargoId->getId());
    }
}
