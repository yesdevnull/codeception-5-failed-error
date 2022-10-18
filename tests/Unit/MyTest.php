<?php

namespace Tests\Unit;

use Codeception\Test\Unit;
use Tests\Support\UnitTester;

class MyTest extends Unit
{
    protected UnitTester $tester;

    // tests
    public function testSomeFeature()
    {
        $this->tester->fail('This is a failure');
    }
}
