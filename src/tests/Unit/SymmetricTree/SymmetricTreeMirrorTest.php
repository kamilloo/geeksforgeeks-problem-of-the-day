<?php

namespace Tests\Unit\SymmetricTree;

use App\SymmetricTree\Models\Node;
use App\SymmetricTree\SymmetricTreeMirror;
use PHPUnit\Framework\TestCase;

class SymmetricTreeMirrorTest extends TestCase
{
    private SymmetricTreeMirror $mirror;

    public function setUp(): void
    {
        parent::setUp();
        $this->mirror = new SymmetricTreeMirror();
    }

    /** @test */
    public function transfer_whenOnlyRoot():void{
        $node = new Node(1);
        $mirrored = $this->mirror->transfer($node);

        $this->assertSame($mirrored->getRoot(), $node->getRoot());
        $this->assertSame($mirrored->getLeft(), $node->getLeft());
        $this->assertSame($mirrored->getRight(), $node->getRight());
    }


    /** @test */
    public function transfer_whenHasOneSubNode():void{

        $sub_node = new Node(2);
        $node = new Node(1);
        $node->setLeftNode($sub_node);

        $expected_mirrored_node = new Node(1);
        $expected_mirrored_node->setRightNode($sub_node);

        $mirrored = $this->mirror->transfer($node);

        $this->assertSame($mirrored->getRoot(), $expected_mirrored_node->getRoot());
        $this->assertSame(null, $mirrored->getLeft());
        $this->assertSame($expected_mirrored_node->getRight()->getRoot(), $mirrored->getRight()->getRoot());
    }


    /** @test */
    public function transfer_whenHasMoreSubNode():void{

        $node = new Node(1);
        $node->setLeftNode(new Node(2));
        $node->getLeft()->setLeftNode(new Node(3));

        $mirrored = $this->mirror->transfer($node);

        $this->assertSame(1, $mirrored->getRoot());
        $this->assertSame(null, $mirrored->getLeft());
        $this->assertSame(2, $mirrored->getRight()->getRoot());
        $this->assertSame(null, $mirrored->getRight()->getLeft());
        $this->assertSame(3, $mirrored->getRight()->getRight()->getRoot());
    }
}