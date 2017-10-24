<?php

namespace Cargo\Tests\Logistic\Domain\Entity;

use Cargo\Logistic\Domain\Entity\Cargo;
use Cargo\Logistic\Domain\Entity\Customer;
use PHPUnit\Framework\TestCase;

class CustomerTest extends TestCase
{
    public function testCustomer()
    {
        $id = 'sample-id';
        $name = 'sample-name';
        $cargo = $this->createMock(Cargo::class);

        $customer = new Customer($id, $name, $cargo);

        $this->assertEquals($id, $customer->getId());
        $this->assertEquals($name, $customer->getName());
        $this->assertEquals($cargo, $customer->getCargo());
    }
}
