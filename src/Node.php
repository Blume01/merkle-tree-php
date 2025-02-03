<?php

namespace MerkleTree;

class Node
{
    public ?Node $left;
    public ?Node $right;
    public string $hash;

    public function __construct(string $hash, ?Node $left = null, ?Node $right = null)
    {
        $this->hash = $hash;
        $this->left = $left;
        $this->right = $right;
    }
}
