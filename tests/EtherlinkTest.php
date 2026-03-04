<?php
/**
 * Tests for EtherLink
 */

use PHPUnit\Framework\TestCase;
use Etherlink\Etherlink;

class EtherlinkTest extends TestCase {
    private Etherlink $instance;

    protected function setUp(): void {
        $this->instance = new Etherlink(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Etherlink::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
