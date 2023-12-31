<?php
declare(strict_types=1);

namespace App\BTS;

use App\SymmetricTree\Models\Node;

class BTSSuccessorSearch
{
    private bool $found = false;
    private int $key;
    private ?int $traversal = null;

    private array $in_order = [];


    public function findInOrderSuccessor(Node $tree, int $key):?int{

        $this->key = $key;

        $this->searchKey($tree);

        if ($this->found){
            $this->inOrderTraversal($tree);
        }
        return isset($this->in_order[$this->traversal])  ? $this->in_order[$this->traversal]: null ;

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

        $this->in_order[] = $tree->getRoot();
        if ($tree->getRoot() == $this->key){
            $this->traversal = count($this->in_order);
        }

//        if($this->traversal !== null && count($this->in_order) > $this->traversal){
//            return;
//        };


        if ($tree->getRight()){
            $this->inOrderTraversal($tree->getRight());
        }

    }
}