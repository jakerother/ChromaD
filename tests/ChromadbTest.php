<?php
/**
 * Tests for ChromaDB
 */

use PHPUnit\Framework\TestCase;
use Chromadb\Chromadb;

class ChromadbTest extends TestCase {
    private Chromadb $instance;

    protected function setUp(): void {
        $this->instance = new Chromadb(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Chromadb::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
