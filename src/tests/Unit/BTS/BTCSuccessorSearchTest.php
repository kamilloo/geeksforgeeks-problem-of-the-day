<?php
declare(strict_types=1);

namespace Tests\Unit\BTS;

use App\BTS\BTSPredessorSearch;
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
    public function findInOrderSuccessor_whenNodeFound_expectPredecessor(){


        $btc_finder = new BTSSuccessorSearch();
        $root = 5;
        $tree = new Node($root);

        $key = 10;
        $leaf = new Node($key);
        $sub_root = new Node(15);
        $tree->setRightNode($sub_root);
        $sub_root->setLeftNode($leaf);
        $found_successor = $btc_finder->findInOrderSuccessor($tree, $key);
        $this->assertSame(15, $found_successor);
    }
}