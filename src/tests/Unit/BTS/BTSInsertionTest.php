<?php
declare(strict_types=1);

namespace Tests\Unit\BTS;

use App\BTS\BTSInsertion;
use App\SymmetricTree\Models\Node;
use PHPUnit\Framework\TestCase;

class BTSInsertionTest extends TestCase
{
    /**
     * @test
     */
    public function insert_whenTreeHasOnlyRoot_leftLeafAdded():void{

        //GIVEN
        $tree = new Node(10);
        $new_leaf = new Node(5);

        //When
        $bst_insertion = new BTSInsertion();
        $bst_insertion->insert($tree, $new_leaf);

        //Then
        $this->assertSame($new_leaf->getRoot(), $tree->getLeft()->getRoot());

    }

    /**
     * @test
     */
    public function insert_whenTreeHasLeftLeaf_rightLeafAdded():void{

        //GIVEN
        $tree = new Node(10);
        $left_leaf = new Node(5);
        $tree->setLeftNode($left_leaf);
        $new_leaf = new Node(15);

        //When
        $bst_insertion = new BTSInsertion();
        $bst_insertion->insert($tree, $new_leaf);

        //Then
        $this->assertSame($new_leaf->getRoot(), $tree->getRight()->getRoot());

    }


}