defmodule Algorithms.QueueTest do
  use ExUnit.Case

  alias Algorithms.Queue

  doctest Queue

  test "new/0 creates a new queue" do
    queue = Queue.new()

    assert queue.items == []
  end

  test "new/1 creates a new queue with items" do
    queue = Queue.new([1, 2, 3])

    assert queue.items == [1, 2, 3]
  end

  test "enqueue/2 adds an element to the queue" do
    queue = Queue.new()

    queue = Queue.enqueue(queue, 1)
    assert queue.items == [1]

    queue = Queue.enqueue(queue, 2)
    assert queue.items == [2, 1]
  end

  test "enqueue/2 works with the pipe operator" do
    queue =
      Queue.new()
      |> Queue.enqueue(1)
      |> Queue.enqueue(2)
      |> Queue.enqueue(3)

    assert queue.items == [3, 2, 1]
  end

  test "dequeue/1 removes an item from the back of the queue" do
    queue = Queue.new([3, 2, 1])

    queue = Queue.dequeue(queue)
    assert queue.items == [3, 2]

    queue = Queue.dequeue(queue)
    assert queue.items == [3]

    queue = Queue.dequeue(queue)
    assert queue.items == []
  end
end
