<?php
declare(strict_types=1);

namespace App\Console\Commands;

use App\SymmetricTree\Models\Node;
use App\SymmetricTree\SymmetricTreeFinder;

class SymmetricTreeCommand
{
    public function execute():int
    {
        $symmetric_tree = new SymmetricTreeFinder();

        $left = new Node(10);
        $second_left = new Node(20);
        $second_left_right = new Node(20);
        $right = new Node(10);
        $second_right = new Node(30);

        $tree = new Node(5);
        $left->setLeftNode($second_left);
        $left->setRightNode($second_left_right);
        $right->setRightNode($second_right);
        $tree->setLeftNode($left);
        $tree->setRightNode($right);

        if($symmetric_tree->search($tree)){
            print_r("\nThe Tree is symmetric\n");
        }
        else{
            print_r("\nThe Tree is not symmetric\n");
        }

        return 0;
    }
}