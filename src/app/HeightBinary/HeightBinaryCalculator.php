<?php
declare(strict_types=1);

namespace App\HeightBinary;

class HeightBinaryCalculator
{
    public function calculate(BinaryNode $node):int{
        $height = 0;
        if ($node->isEmpty()) {
            return $height;
        }
        $height = 1 + max($this->calculate($node->left ?? new EmptyBinaryNode()), $this->calculate($node->right ?? new EmptyBinaryNode()));

        return $height;
    }
}