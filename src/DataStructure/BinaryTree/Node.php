<?php

namespace DataStructure\BinaryTree;

/**
 * Class Node
 *
 * @link https://en.wikipedia.org/wiki/Node_(computer_science)
 *
 * @package DataStructure\BinaryTree
 * @author Jorge González <scrub.mx@gmail.com>
 */
class Node
{
    public $value;
    public $left;
    public $right;

    /**
     * Create a new Node instance.
     *
     * @param $item
     * @return void
     */
    public function __construct($item)
    {
        $this->value = $item;
        $this->left = null;
        $this->right = null;
    }

    /**
     * Perform an in-order traversal of the current node.
     *
     * @return void
     */
    public function dump()
    {
        if ($this->left !== null) {
            $this->left->dump();
        }

        var_dump($this->value);

        if ($this->right !== null) {
            $this->right->dump();
        }
    }
}
