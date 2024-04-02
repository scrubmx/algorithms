defmodule Algorithms.Stack do
  @moduledoc """
  In computer science, a stack is an abstract data type that serves as a
  collection of elements with two main operations:

   * Push, which adds an element to the collection, and
   * Pop, which removes the most recently added element.

  Additionally, a peek operation can, without modifying the stack, return the
  value of the last element added. The name stack is an analogy to a set of
  physical items stacked one atop another, such as a stack of plates.

  The order in which an element added to or removed from a stack is described as
  last in, first out, referred to by the acronym LIFO.

  Considered a linear data structure, or more abstractly a sequential
  collection, a stack has one end which is the only position at which the push
  and pop operations may occur, the top of the stack, and is fixed at the other
  end, the bottom. This data structure makes it possible to implement a stack
  as a singly linked list and as a pointer to the top element. A stack may be
  implemented to have a bounded capacity. If the stack is full and does not
  contain enough space to accept another element, the stack is in a state of
  stack overflow.

  A stack is needed to implement [depth-first search](https://en.wikipedia.org/wiki/Depth-first_search).



  ## Stack (LIFO)
  Representation of a LIFO (last in, first out) Stack:

    ```mermaid
    flowchart TD
      A[Item] -.->|Push| B[Item]
      subgraph Stack
        B --- C[Top]
        C --- D[Item]
        D --- E[Bottom]
      end
      B -.-> |Pop| A
    ```

  ## Time and Space Complexity

    | Operation     | Average    | Worst Case |
    |:-------------:|:----------:|:----------:|
    | Search        |    O(n)    |    O(n)    |
    | Insert        |    O(1)    |    O(1)    |
    | Delete        |    O(1)    |    O(1)    |
    | Space         |    O(n)    |    O(n)    |
  """

  defstruct items: []

  def new, do: %__MODULE__{}

  def new(items) when is_list(items) do
    %__MODULE__{items: items}
  end

  @doc ~S"""
  Insert an item at the top of the stack.

  Adding items to the end of a dynamic array requires ${\displaystyle O(1)}$ time.

  ## Example
      iex> stack = Algorithms.Stack.new()
      iex> stack = Algorithms.Stack.push(stack, 1)
      iex> stack = Algorithms.Stack.push(stack, 2)
      iex> _stack = Algorithms.Stack.push(stack, 3)
      %Algorithms.Stack{items: [1, 2, 3]}
  """
  def push(%__MODULE__{items: items}, item) do
    %__MODULE__{items: items ++ [item]}
  end


  @doc ~S"""
  Remove an item from the top of the stack.

  Removing items from the end of a dynamic array requires ${\displaystyle O(1)}$ time.

  ## Example
      iex> stack = Algorithms.Stack.new()
      iex> stack = Algorithms.Stack.push(stack, 1)
      iex> stack = Algorithms.Stack.push(stack, 2)
      iex> stack = Algorithms.Stack.push(stack, 3)
      %Algorithms.Stack{items: [1, 2, 3]}
      iex> Algorithms.Stack.pop(stack)
      {3, %Algorithms.Stack{items: [1, 2]}}
  """
  def pop(%__MODULE__{items: items}) do
    item = List.last(items)

    {item, %__MODULE__{items: List.delete_at(items, -1)}}
  end

  def peek do
    # TODO: Implement peek
  end

  def size do
    # TODO: Implement size
  end

  def top do
    # TODO: Implement top
  end
end
