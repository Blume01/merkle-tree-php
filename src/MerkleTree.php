<?php

namespace MerkleTree;

class MerkleTree
{
    private ?Node $root;

    public function __construct(array $leaves)
    {
        if (empty($leaves)) {
            throw new \InvalidArgumentException("A lista de folhas não pode estar vazia.");
        }

        $hashedLeaves = array_map(fn($leaf) => new Node(hash('sha256', $leaf)), $leaves);
        $this->root = $this->buildTree($hashedLeaves);
    }

    private function buildTree(array $nodes): ?Node
    {
        while (count($nodes) > 1) {
            $tempNodes = [];

            for ($i = 0; $i < count($nodes); $i += 2) {
                $left = $nodes[$i];
                $right = $nodes[$i + 1] ?? new Node($left->hash); // Para nós ímpares, duplicamos

                $parentHash = hash('sha256', $left->hash . $right->hash);
                $tempNodes[] = new Node($parentHash, $left, $right);
            }

            $nodes = $tempNodes;
        }

        return $nodes[0] ?? null;
    }

    public function getRootHash(): string
    {
        return $this->root ? $this->root->hash : '';
    }
}
