defmodule Algorithms.StackTest do
  use ExUnit.Case

  alias Algorithms.Stack

  doctest Stack

  test "new/0 creates a new stack" do
    stack = Stack.new()

    assert stack.items == []
  end

  test "new/1 creates a new stack with items" do
    stack = Stack.new([1, 2, 3])

    assert stack.items == [1, 2, 3]
  end

  test "enstack/2 adds an element to the stack" do
    stack =
      Stack.new()
      |> Stack.push(1)
      |> Stack.push(2)
      |> Stack.push(3)

    assert stack.items == [1, 2, 3]
  end
end
