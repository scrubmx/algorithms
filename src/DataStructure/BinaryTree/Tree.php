<?php
/**
 * @package scrubmx/algorithms
 * @author Jorge González <scrub.mx@gmail.com>
 */

namespace DataStructure\BinaryTree;

use DataStructure\BinaryTree\Node;

class Tree
{
    /**
     * The root node of the tree instance.
     *
     * @var null
     */
    protected $root;

    /**
     * Create a new Tree instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->root = null;
    }

    /**
     * Check if the tree is empty.
     *
     * @return bool
     */
    public function isEmpty()
    {
        return is_null($this->root);
    }

    /**
     * Insert a new node in the tree.
     *
     * @param $item
     * @return void
     */
    public function insert($item)
    {
        $node = new Node($item);

        if ($this->isEmpty()) {
            $this->root = $node; // special case if tree is empty
        } else {
            // insert the node somewhere in the tree starting at the root
            $this->insertNode($node, $this->root);
        }
    }

    /**
     * @param $node
     * @param $pointer
     *
     * @return void
     */
    protected function insertNode($node, &$pointer)
    {
        if (is_null($pointer)) {
            $pointer = $node;
            return;
        }

        if ($node->value < $pointer->value) {
            $this->insertNode($node, $pointer->left);
        } else {
            $this->insertNode($node, $pointer->right);
        }
    }

    /**
     * Dump the tree rooted at "root"
     *
     * @return void
     */
    public function traverse()
    {
        $this->root->dump();
    }

    /**
     * Get the root node for the tree instance.
     *
     * @return null
     */
    public function getRoot()
    {
        return $this->root;
    }
}
