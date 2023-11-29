<?php
declare(strict_types=1);

namespace App\Console\Commands;

use App\LevelOrderTraversal\LevelOrderTraversalPrinter;
use App\SymmetricTree\Models\Node;

class LevelOrderTraversalCommand
{
    public function execute(Node $root):void{
        $level_order_traversal = new LevelOrderTraversalPrinter();
        $printed = $level_order_traversal->print($root);

        print_r("Level Order Traversal: " . $printed . "\n");
    }

}