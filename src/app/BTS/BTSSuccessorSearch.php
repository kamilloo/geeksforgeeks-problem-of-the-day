<?php
declare(strict_types=1);

namespace App\BTS;

use App\SymmetricTree\Models\Node;

class BTSSuccessorSearch
{
    private ?int $successor = null;
    private ?int $found_successor = null;


    public function findInOrderSuccessor(Node $tree, int $key):?int{
        //BST
        //Find a node

        if ($key == $tree->getRoot()){
            return $this->found_successor = $this->successor;
        }
        if ($key < $tree->getRoot()){
            if ($tree->getLeft()){
                $this->successor = $tree->getRoot();
                $this->findInOrderSuccessor($tree->getLeft(), $key);
            }
        }
        else{
            if ($tree->getRight()) {
                $this->successor = $tree->getRoot();
                $this->findInOrderSuccessor($tree->getRight(), $key);
            }
        }

        return $this->found_successor;

        //If node not found return null
        //keep successor on stack
    }
}