<?php
declare(strict_types=1);

namespace App\LevelOrderTraversal;

use App\SymmetricTree\Models\Node;

class LevelOrderTraversalPrinter
{
    public function print(Node $root):string{
        $queue = new \SplQueue();
        $queue->enqueue($root);
        $print = "";
        do{
            $node = $queue->dequeue();
            $print .= $node->getRoot() . " ";
            if($node->getLeft()){
                $queue->enqueue($node->getLeft());
            }
            if($node->getRight()){
                $queue->enqueue($node->getRight());
            }

        }
        while (!$queue->isEmpty());

        return $print;

    }
}