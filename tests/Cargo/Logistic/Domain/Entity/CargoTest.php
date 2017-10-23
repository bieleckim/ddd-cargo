<?php

namespace Cargo\Tests\Logistic\Domain\Entity;

use Cargo\Logistic\Domain\Entity\Cargo;
use PHPUnit\Framework\TestCase;

class CargoTest extends TestCase
{
    public function testCargo()
    {
        $id = 'sample-id';
        $cargo = new Cargo($id);
        $this->assertEquals($id, $cargo->getId());
    }
}