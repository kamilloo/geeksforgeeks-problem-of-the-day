<?php

namespace Tests\Unit\SymmetricTree\Models;

use App\SymmetricTree\Models\Node;
use PHPUnit\Framework\TestCase;

class NodeTest extends TestCase
{
    /**
     * @test
     */
    public function print_node():void{
        $node = new Node(1);
        $this->assertInstanceOf(Node::class,$node);
    }


    /** @test */
    public function getLeftNode():void{
        $node = new Node(1);
        $left_node = new Node(2);
        $node->setLeftNode($left_node);
        $this->assertSame($left_node, $node->getLeft());
    }


    /** @test  */
    public function isEqual_whenTheNodesNotExisting_isEqual():void{
        $node = new Node(1);
        $other_node = new Node(1);

        $this->assertTrue($node->isEqual($other_node));
    }

    /** @test  */
    public function isEqual_whenTheNodesAreTheSame_isEqual():void{
        $left = new Node(10);
        $right = new Node(100);
        $node = new Node(1);
        $node->setLeftNode($left);
        $node->setRightNode($right);
        $other_node = new Node(1);
        $other_node->setLeftNode($left);
        $other_node->setRightNode($right);

        $this->assertTrue($node->isEqual($other_node));
    }

    /** @test  */
    public function isEqual_whenRootsNotTheSame_notEqual():void{
        $node = new Node(1);
        $other_node = new Node(2);

        $this->assertFalse($node->isEqual($other_node));
    }

    /** @test  */
    public function isEqual_whenLeftNodesNotTheSame_notEqual():void{
        $node = new Node(1);
        $node->setLeftNode(new Node(10));

        $other_node = new Node(1);
        $other_node->setLeftNode(new Node(100));

        $this->assertFalse($node->isEqual($other_node));
    }

    /** @test  */
    public function isEqual_whenRightNodesNotTheSame_notEqual():void{
        $node = new Node(1);
        $node->setRightNode(new Node(10));

        $other_node = new Node(1);
        $other_node->setRightNode(new Node(100));

        $this->assertFalse($node->isEqual($other_node));
    }

    /** @test  */
    public function isEqual_whenOtherNodeRightNodeIsEmpty_notEqual():void{
        $node = new Node(1);
        $node->setRightNode(new Node(10));

        $other_node = new Node(1);

        $this->assertFalse($node->isEqual($other_node));
    }

    /** @test  */
    public function isEqual_whenOtherNodeLeftNodeIsEmpty_notEqual():void{
        $node = new Node(1);
        $node->setLeftNode(new Node(10));

        $other_node = new Node(1);

        $this->assertFalse($node->isEqual($other_node));
    }
}