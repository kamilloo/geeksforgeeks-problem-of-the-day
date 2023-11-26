<?php

namespace App\SymmetricTree;

use App\SymmetricTree\Models\Node;

class SymmetricTreeFinder
{
    private SymmetricTreeMirror $mirror;

    public function __construct()
    {
        $this->mirror = new SymmetricTreeMirror();
    }

    public function search(Node $tree):bool
    {
        if (empty($tree->getLeft()) && empty($tree->getRight())){
            return true;
        }

        if (empty($tree->getLeft()) xor empty($tree->getRight())){
            return false;
        }
        $mirrored_right = $this->mirror->transfer($tree->getRight());

        return $tree->getLeft()->isEqual($mirrored_right);
    }
}