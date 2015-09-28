<?php
/**
 * Depth-first traversal.
 * There are three types of depth-first traversal:
 *
 *  1. PRE-ORDER
 *      - Display the data part of root element (or current element)
 *      - Traverse the left subtree by recursively calling the pre-order function.
 *      - Traverse the right subtree by recursively calling the pre-order function.
 *
 *  2. IN-ORDER (symmetric)
 *      - Traverse the left subtree by recursively calling the in-order function.
 *      - Display the data part of root element (or current element).
 *      - Traverse the right subtree by recursively calling the in-order function.
 *
 *  3. POST-ORDER
 *      - Traverse the left subtree by recursively calling the post-order function.
 *      - Traverse the right subtree by recursively calling the post-order function.
 *      - Display the data part of root element (or current element).
 *
 *
 * @link https://en.wikipedia.org/wiki/Depth-first_search
 * @link https://en.wikipedia.org/wiki/Tree_traversal
 *
 * @author Jorge González <scrub.mx@gmail.com>
 */

use DataStructure\BinaryTree\Tree;
use DataStructure\BinaryTree\Node;
use DataStructure\Stack;

/**
 * Depth-first pre-order (recursive)
 *
 * @param \DataStructure\BinaryTree\Node $node
 */
function depth_first_pre_order(Node $node)
{
    var_dump($node->value);

    if ($node->left !== null) {
        depth_first_pre_order($node->left);
    }

    if ($node->right !== null) {
        depth_first_pre_order($node->right);
    }
}

/**
 * Depth-first in-order (recursive)
 *
 * @param \DataStructure\BinaryTree\Node $node
 */
function depth_first_in_order(Node $node)
{
    if ($node->left !== null) {
        depth_first_in_order($node->left);
    }

    var_dump($node->value);

    if ($node->right !== null) {
        depth_first_in_order($node->right);
    }
}

/**
 * Depth-first post-order (recursive)
 *
 * @param \DataStructure\BinaryTree\Node $node
 */
function depth_first_post_order(Node $node)
{
    if ($node->left !== null) {
        depth_first_post_order($node->left);
    }

    if ($node->right !== null) {
        depth_first_post_order($node->right);
    }

    var_dump($node->value);
}

/**
 * Depth-first pre-order (without recursion)
 * In this case we have to use a Stack.
 *
 * @param \DataStructure\BinaryTree\Tree $tree
 */
function depth_first_traversal(Tree $tree)
{
    $root = $tree->getRoot();

    if ($root === null) {
        return;
    }

    $stack = new Stack();
    $stack->push($root);

    while (! $stack->isEmpty()) {
        $node = $stack->pop();
        var_dump($node->value);

        if ($node->right !== null) {
            $stack->push($node->right);
        }

        if ($node->left !== null) {
            $stack->push($node->left);
        }
    }
}
