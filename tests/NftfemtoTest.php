<?php
/**
 * Tests for NftFemto
 */

use PHPUnit\Framework\TestCase;
use Nftfemto\Nftfemto;

class NftfemtoTest extends TestCase {
    private Nftfemto $instance;

    protected function setUp(): void {
        $this->instance = new Nftfemto(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Nftfemto::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
