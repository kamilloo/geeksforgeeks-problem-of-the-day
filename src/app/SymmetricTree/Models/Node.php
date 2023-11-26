<?php
declare(strict_types=1);

namespace App\SymmetricTree\Models;

class Node
{
    private ?Node $left = null;
    private ?Node $right = null;

    public function __construct(readonly private int $root)
    {
    }

    public function setLeftNode(Node $node):void
    {
        $this->left = $node;
    }

    public function setRightNode(Node $node):void
    {
        $this->right = $node;

    }

    public function getLeft(): ?Node
    {
        return $this->left;
    }

    public function getRight(): ?Node
    {
        return $this->right;
    }

    public function isEqual(Node $other_node):bool
    {
        if($this->root !== $other_node->root){
            return false;
        }

        if(!empty($this->right) && !empty($other_node->right)){
            if(!$this->right->isEqual($other_node->right)){
                return false;
            }
        }

        if(!empty($this->left) && !empty($other_node->left)){
            if(!$this->left->isEqual($other_node->left)){
                return false;
            }
        }

        if (empty($this->right) xor empty($other_node->right)){
            return false;
        }

        if (empty($this->left) xor empty($other_node->left)){
            return false;
        }

        return true;

    }

    public function getRoot():int
    {
        return $this->root;
    }

}