<?php

namespace Tests\Unit\SymmetricTree;

use App\SymmetricTree\Models\Node;
use App\SymmetricTree\SymmetricTreeFinder;
use PHPUnit\Framework\TestCase;

class SymmetricTreeFinderTest extends TestCase
{
    private SymmetricTreeFinder $finder;

    protected function setUp(): void
    {
        parent::setUp();
        $this->finder = new SymmetricTreeFinder();

    }

    /** @test */
    public function search_whenEmptyNodes_SymmetricDetected():void{

        $node = new Node(1);
        $symmetric = $this->finder->search($node);

        $this->assertTrue($symmetric);
    }


    /** @test */
    public function search_whenNodesEquals_notSymmetric():void{

        $node = new Node(1);
        $left_node = new Node(1);
        $right_node = new Node(2);
        $node->setLeftNode($left_node);
        $node->setRightNode($right_node);
        $symmetric = $this->finder->search($node);

        $this->assertFalse($symmetric);
    }


    /** @test */
    public function search_whenNodesAreNotEquals_symmetricDetected():void{

        $node = new Node(1);
        $left_node = new Node(2);
        $right_node = new Node(2);
        $node->setLeftNode($left_node);
        $node->setRightNode($right_node);
        $left_node->setLeftNode(new Node(3));
        $right_node->setRightNode(new Node(3));

        $symmetric = $this->finder->search($node);

        $this->assertTrue($symmetric);
    }
}