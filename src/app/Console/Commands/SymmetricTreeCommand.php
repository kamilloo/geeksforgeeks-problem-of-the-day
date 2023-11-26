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

        if($symmetric_tree->search(new Node(1))){
            print_r("\nThe Tree is symmetric\n");
        }
        else{
            print_r("\nThe Tree is not symmetric\n");
        }

        return 0;
    }
}