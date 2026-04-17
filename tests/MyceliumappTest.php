<?php
/**
 * Tests for MyceliumApp
 */

use PHPUnit\Framework\TestCase;
use Myceliumapp\Myceliumapp;

class MyceliumappTest extends TestCase {
    private Myceliumapp $instance;

    protected function setUp(): void {
        $this->instance = new Myceliumapp(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Myceliumapp::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
