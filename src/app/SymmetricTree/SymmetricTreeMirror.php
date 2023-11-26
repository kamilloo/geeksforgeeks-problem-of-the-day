<?php

namespace App\SymmetricTree;

use App\SymmetricTree\Models\Node;

class SymmetricTreeMirror
{
    public function transfer(Node $node):Node{

        return $this->mirrorNode($node);
    }

    /**
     * @param Node $node
     * @return Node
     */
    public function mirrorNode(Node $node): Node
    {
        $mirrored = new Node($node->getRoot());
        $right = $node->getRight();
        if (!empty($right)) {
            $mirrored_right = $this->mirrorNode($right);
            $mirrored->setLeftNode($mirrored_right);
        }
        $left = $node->getLeft();
        if (!empty($left)) {
            $mirrored_left = $this->mirrorNode($left);
            $mirrored->setRightNode($mirrored_left);
        }
        return $mirrored;
    }
}