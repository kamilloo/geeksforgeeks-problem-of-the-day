<?php
declare(strict_types=1);

namespace App\HeightBinary;

class EmptyBinaryNode extends BinaryNode
{
    public function __construct()
    {
        parent::__construct(0);
    }

    public function isEmpty(): bool
    {
        return true;
    }
}