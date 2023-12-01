<?php
declare(strict_types=1);

namespace Tests\Unit\Graphs;

use App\Graphs\TraversalGraph;
use PHPUnit\Framework\TestCase;

class TraversalGraphTest extends TestCase
{
    public function testBfs_findPath()
    {
        $vertices = [];
        $vertices[] = 1;
        $vertices[] = 2;
        $vertices[] = 3;

        $adjacency_list = [];
        $adjacency_list[1] = [2,3];
        $adjacency_list[2] = [1,3];
        $adjacency_list[3] = [1,2];

        $traversal_graph = new TraversalGraph($vertices, $adjacency_list);

        $traversal = $traversal_graph->bfs(3);

        $this->assertSame("312",$traversal);

    }

    public function testDfs_findPath()
    {
        $vertices = [];
        $vertices[] = 1;
        $vertices[] = 2;
        $vertices[] = 3;

        $adjacency_list = [];
        $adjacency_list[1] = [2,3];
        $adjacency_list[2] = [1,3];
        $adjacency_list[3] = [1,2];

        $traversal_graph = new TraversalGraph($vertices, $adjacency_list);

        $traversal = $traversal_graph->dfs(2);

        $this->assertSame("213",$traversal);

    }
}