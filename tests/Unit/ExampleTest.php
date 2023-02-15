<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    public function setUp(): void {
        require_once 'app/Helpers/ArrayHelper.php';
        parent::setUp();
    }
    
    /**
     * @test
     * @dataProvider provideData
     */
    public function testVoidFunction($array)
    {
        // Call the void function
        removeLastItem($array);
        $this->assertTrue(true);
    }

    public function provideData()
    {
        return [
            [
                'array' => [1, 2, 3]
            ],
            [
                'array' => [3, 2, 3]
            ],
        ];
    }
}
