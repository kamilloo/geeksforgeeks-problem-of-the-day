<?php
declare(strict_types=1);

namespace App\Graphs;

class TraversalGraph
{
    private array $graph_vertices;
    private array $adjacency_list;
    private string $path = '';
    private array $visited = [];


    public function __construct(array $graph_vertices, array $adjacency_list)
    {
        $this->graph_vertices = $graph_vertices;
        $this->adjacency_list = $adjacency_list;
    }

    public function bfs(int $start):string
    {

        $queue = new \SplQueue();
        $queue->enqueue($start);
        $visited= [];
        $visited[$start] = true;

        while (!$queue->isEmpty()){
            $current = $queue->dequeue();
            $this->path .= $current;
            foreach ($this->adjacency_list[$current] as $neighbor){
                if (!isset($visited[$neighbor])){
                    $queue->enqueue($neighbor);
                    $visited[$neighbor] = true;
                }
            }
        }

        return $this->path;
    }

    public function dfs(int $start):string
    {
        $this->visited[$start] = true;
        $this->path .= $start;
        foreach ($this->adjacency_list[$start] as $neighbor){
            if (!isset($this->visited[$neighbor])){
                $this->dfs($neighbor);
            }
        }

        return $this->path;
    }
}