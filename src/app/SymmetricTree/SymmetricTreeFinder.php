<?php

namespace App\SymmetricTree;

use App\SymmetricTree\Models\Node;

class SymmetricTreeFinder
{
    public function __construct()
    {
        $this->minor = new SymmetricTreeMinor();
    }

    public function search(Node $tree):bool
    {
        if (empty($tree->getLeft()) && empty($tree->getRight())){
            return true;
        }

        if (empty($tree->getLeft()) xor empty($tree->getRight())){
            return false;
        }
        $minored_right = $this->minor->transfer($tree->getRight());

        return $tree->getLeft()->isEqual($minored_right);
    }
}