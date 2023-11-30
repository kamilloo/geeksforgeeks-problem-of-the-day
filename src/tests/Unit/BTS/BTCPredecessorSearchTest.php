<?php
declare(strict_types=1);

namespace Tests\Unit\BTS;

use App\BTS\BTSPredessorSearch;
use App\SymmetricTree\Models\Node;
use PHPUnit\Framework\TestCase;

class BTCPredecessorSearchTest extends TestCase
{
    /**
     * @test
     */
    public function findInOrderPredecessor_whenNodeNotFound_expectNull(){
        $btc_finder = new BTSPredessorSearch();
        $tree = new Node(10);
        $leaf = new Node(15);
        $tree->setRightNode($leaf);
        $found_successor = $btc_finder->findInOrderPredecessor($tree, 20);
        $this->assertNull($found_successor);
    }

    /**
     * @test
     */
    public function findInOrderPredecessor_whenNodeFound_expectPredecessor(){


        $btc_finder = new BTSPredessorSearch();
        $root = 5;
        $tree = new Node($root);

        $key = 10;
        $leaf = new Node($key);
        $sub_root = new Node(15);
        $tree->setRightNode($sub_root);
        $sub_root->setLeftNode($leaf);
        $found_successor = $btc_finder->findInOrderPredecessor($tree, $key);
        $this->assertSame($root, $found_successor);
    }
}