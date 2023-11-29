<?php
declare(strict_types=1);

namespace App\BTS;

use App\SymmetricTree\Models\Node;

class BTSInsertion
{
    public function insert(Node $tree, Node $new_leaf):bool
    {
        if ($new_leaf->getRoot() < $tree->getRoot()){
            if ($tree->getLeft()){
                $this->insert($tree->getLeft(), $new_leaf);
            }else{
                $tree->setLeftNode($new_leaf);
            }
        }
        else{
            if ($tree->getRight()){
                $this->insert($tree->getRight(), $new_leaf);
            }else{
                $tree->setRightNode($new_leaf);
            }
        }
        return true;
    }
}