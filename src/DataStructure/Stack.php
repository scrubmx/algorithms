<?php

namespace DataStructure;

/**
 * Class Stack
 *
 * @link https://en.wikipedia.org/wiki/Stack_(abstract_data_type)
 *
 * @package DataStructure
 * @author Jorge González <scrub.mx@gmail.com>
 */
class Stack
{
    /**
     * The array that hold the items in the stack.
     *
     * @var array
     */
    protected $items;

    /**
     * Create a new Stack instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->items = [];
    }

    /**
     * Push a new element in the stack.
     *
     * @param $item
     * @return mixed
     */
    public function push($item)
    {
        return array_push($this->items, $item);
    }

    /**
     * Remove the last element from the stack.
     *
     * @return mixed
     */
    public function pop()
    {
        return array_pop($this->items);
    }

    /**
     * Check if the stack is empty.
     *
     * @return bool
     */
    public function isEmpty()
    {
        return empty($this->items);
    }
}
