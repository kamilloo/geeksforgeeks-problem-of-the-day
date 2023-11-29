<?php
declare(strict_types=1);

namespace Tests\Unit\BTS;

use App\BTS\BTSSuccessorSearch;
use App\SymmetricTree\Models\Node;
use PHPUnit\Framework\TestCase;

class BTCSuccessorSearchTest extends TestCase
{
    /**
     * @test
     */
    public function findInOrderSuccessor_whenNodeNotFound_expectNull(){
        $btc_finder = new BTSSuccessorSearch();
        $tree = new Node(10);
        $leaf = new Node(15);
        $tree->setRightNode($leaf);
        $found_successor = $btc_finder->findInOrderSuccessor($tree, 20);
        $this->assertNull($found_successor);
    }

    /**
     * @test
     */
    public function findInOrderSuccessor_whenNodeFound_expectSuccessor(){


        $btc_finder = new BTSSuccessorSearch();
        $root = 10;
        $tree = new Node($root);
        $key = 15;
        $leaf = new Node($key);
        $tree->setRightNode($leaf);
        $found_successor = $btc_finder->findInOrderSuccessor($tree, $key);
        $this->assertSame($root, $found_successor);
    }
}