<?php

namespace Cargo\Tests\Logistic\Domain\Entity;

use Cargo\Logistic\Domain\Entity\Customer;
use PHPUnit\Framework\TestCase;

class CustomerTest extends TestCase
{
    public function testCustomer()
    {
        $id = 'sample-id';
        $customer = new Customer($id);
        $this->assertEquals($id, $customer->getId());
    }
}
