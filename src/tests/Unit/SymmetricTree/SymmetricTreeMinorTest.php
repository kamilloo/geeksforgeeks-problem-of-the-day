<?php

namespace Tests\Unit\SymmetricTree;

use App\SymmetricTree\Models\Node;
use App\SymmetricTree\SymmetricTreeMinor;
use PHPUnit\Framework\TestCase;

class SymmetricTreeMinorTest extends TestCase
{
    private SymmetricTreeMinor $minor;

    public function setUp(): void
    {
        parent::setUp();
        $this->minor = new SymmetricTreeMinor();
    }

    /** @test */
    public function call_for_minor_node():void{
        $node = new Node(1);
        $minored = $this->minor->transfer($node);

        $this->assertSame($minored, $node);
    }
}