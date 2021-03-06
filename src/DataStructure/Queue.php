<?php

namespace DataStructure;

/**
 * Class Queue
 *
 * @link https://en.wikipedia.org/wiki/Queue_(abstract_data_type)
 *
 * @package DataStructure
 * @author Jorge González <scrub.mx@gmail.com>
 */
class Queue
{
    /**
     * The array that hold the items in the queue.
     *
     * @var array
     */
    protected $items;

    /**
     * Create a new Queue instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->items = [];
    }

    /**
     * Push a new element in the queue.
     *
     * @param $item
     * @return mixed
     */
    public function push($item)
    {
        return array_unshift($this->items, $item);
    }

    /**
     * Remove the first element from the queue.
     *
     * @return mixed
     */
    public function pop()
    {
        return array_pop($this->items);
    }

    /**
     * Check if the queue is empty.
     *
     * @return bool
     */
    public function isEmpty()
    {
        return empty($this->items);
    }
}
