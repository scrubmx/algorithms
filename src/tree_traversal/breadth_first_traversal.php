<?php
/**
 * This level-by-level traversal is called a breadth-first traversal
 * It explores the neighbor nodes first, before moving to the next level.
 *
 * @link https://en.wikipedia.org/wiki/Breadth-first_search
 * @link https://en.wikipedia.org/wiki/Tree_traversal
 *
 * @author Jorge González <scrub.mx@gmail.com>
 */

use DataStructure\BinaryTree\Tree;
use DataStructure\Queue;

/**
 * Breadth-first traversal uses a Queue instead od a Stack.
 *
 * @param \DataStructure\BinaryTree\Tree $tree
 */
function breadth_first_traversal(Tree $tree)
{
    $root  = $tree->getRoot();

    if ($root === null) {
        return;
    }

    $queue = new Queue();
    $queue->push($root);

    while (! $queue->isEmpty()) {
        $node = $queue->pop();
        var_dump($node->value);

        if ($node->left !== null) {
            $queue->push($node->left);
        }

        if ($node->right !== null) {
            $queue->push($node->right);
        }
    }
}
