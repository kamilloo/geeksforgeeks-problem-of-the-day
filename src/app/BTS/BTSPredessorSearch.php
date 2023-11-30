<?php
declare(strict_types=1);

namespace App\BTS;

use App\SymmetricTree\Models\Node;

class BTSPredessorSearch
{
    private bool $found = false;
    private int $key;
    private bool $traversal = false;

    private array $in_order = [];


    public function findInOrderPredecessor(Node $tree, int $key):?int{

        $this->key = $key;

        $this->searchKey($tree);

        if ($this->found){
            $this->inOrderTraversal($tree);
        }
        return count($this->in_order) ? $this->in_order[count($this->in_order) - 1]: null ;

    }

    private function searchKey(Node $tree):void
    {
        if ($this->key == $tree->getRoot()){
            $this->found = true;
            return;
        }

        if ($this->key < $tree->getRoot()){
            if ($tree->getLeft()){
                $this->searchKey($tree->getLeft());
            }
        }
        else{
            if ($tree->getRight()) {
                $this->searchKey($tree->getRight());
            }
        }
        return;
    }

    private function inOrderTraversal(Node $tree):void
    {
        if ($tree->getLeft()){
            $this->inOrderTraversal($tree->getLeft());
        }

        if ($tree->getRoot() == $this->key){
            $this->traversal = true;
        }

        if($this->traversal){
            return;
        };

        $this->in_order[] = $tree->getRoot();

        if ($tree->getRight()){
            $this->inOrderTraversal($tree->getRight());
        }

    }
}