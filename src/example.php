<?php

require_once __DIR__ . '/../vendor/autoload.php';

use DataStructure\BinaryTree\Tree;

$tree = new Tree();
$items = [5, 2, 1, 3, 4, 5, 6, 7, 9, 8, 10];

array_map([$tree, 'insert'], $items);

/*
        5
     /     \
    2       5
   / \     / \
  1   3       6
       \     / \
        4       7
                 \
                  9
                 / \
                8  10
*/

echo '==== DEPTH FIRST ===='.PHP_EOL;
echo depth_first_traversal($tree);

echo '==== BREADTH FIRST ===='.PHP_EOL;
echo breadth_first_traversal($tree);
