<?php
declare(strict_types=1);

namespace App\Console\Commands;

use App\BTS\BTSPredessorSearch;
use App\SymmetricTree\Models\Node;

class BTSpredecessorSearchCommand
{
    public function execute():void{

        $bts_predecessor_search = new BTSPredessorSearch();

        $tree = new Node(20);
        $left = new Node(9);
        $tree->setLeftNode($left);
        $right = new Node(25);
        $tree->setRightNode($right);
        $left->setLeftNode(new Node(5));
        $left_right = new Node(12);
        $left->setRightNode($left_right);
        $left_right->setLeftNode(new Node(11));
        $left_right->setRightNode(new Node(19));

        $predecessor = $bts_predecessor_search->findInOrderPredecessor($tree, 9);

        print_r("The predecessor is: {$predecessor}");
        exit(0);
    }
}