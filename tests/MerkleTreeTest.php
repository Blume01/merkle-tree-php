<?php

use MerkleTree\MerkleTree;
use PHPUnit\Framework\TestCase;

class MerkleTreeTest extends TestCase
{
    public function testRootHash()
    {
        $data = ["block1", "block2", "block3", "block4"];
        $tree = new MerkleTree($data);

        $this->assertNotEmpty($tree->getRootHash());
        $this->assertIsString($tree->getRootHash());
    }
}
