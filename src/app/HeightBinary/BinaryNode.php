<?php
declare(strict_types=1);

namespace App\HeightBinary;

class BinaryNode
{
    public int $value;
    public ?BinaryNode $left;
    public ?BinaryNode $right;

    public function __construct(int $value){
        $this->value = $value;
        $this->left = null;
        $this->right = null;
    }

    public function setLeft(BinaryNode $left): void
    {
        $this->left = $left;
    }

    public function setRight(BinaryNode $right): void
    {
        $this->right = $right;
    }

    public function isEmpty(): bool
    {
        return $this->value === null;
    }


}