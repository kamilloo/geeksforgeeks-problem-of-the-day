<?php
declare(strict_types=1);

namespace App\Console\Commands;

use App\SymmetricTree\Models\Node;

class BTSsuccessorSearchCommand
{
    public function exectute():void{

        $bts_successor_search = new BTSsuccessorSearchCommand();

        $tree = new Node(2);
        $node = new Node(5);
        $tree->setRightNode($node);

        $successor = $bts_successor_search->exectute($tree, $node);

        print_r("The successor is: {$successor}");
        exit(0);
    }
}