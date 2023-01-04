<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    public function test_1()
    {
        $this->assertTrue(true);
        $this->assertEmpty(null);
    }

    public function test_2()
    {
        $this->assertTrue(true);
    }

    public function Test_3()
    {
        $this->assertEmpty(null);
        $this->assertTrue(true);
    }

    protected function test_4()
    {
        $this->assertFalse(false);
        $this->assertTrue(true);
    }
}
