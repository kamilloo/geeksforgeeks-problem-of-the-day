<?php
declare(strict_types=1);

namespace App\Console\Commands;

use App\BTS\BTSPredessorSearch;
use App\BTS\BTSSuccessorSearch;
use App\SymmetricTree\Models\Node;

class BTSSuccessorSearchCommand
{
    public function execute():void{

        $bts_predecessor_search = new BTSSuccessorSearch();

        $tree = new Node(20);
        $left = new Node(9);
        $tree->setLeftNode($left);
        $right = new Node(25);
        $tree->setRightNode($right);
        $left->setLeftNode(new Node(5));
        $left_right = new Node(12);
        $left->setRightNode($left_right);
        $left_right->setLeftNode(new Node(11));
        $left_right->setRightNode(new Node(14));

        $successor = $bts_predecessor_search->findInOrderSuccessor($tree, 14);

        print_r("The successor is: {$successor}");
        exit(0);
    }
}