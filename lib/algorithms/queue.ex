defmodule Algorithms.Queue do
  @moduledoc ~S"""
  A queue is a collection of entities that are maintained in a sequence and can
  be modified by the addition of entities at one end of the sequence and the
  removal of entities from the other end of the sequence. By convention, the
  end of the sequence at which elements are added is called the back, tail, or
  rear of the queue, and the end at which elements are removed is called the
  head or front of the queue.

  ## FIFO Queue
  Representation of a [FIFO](https://en.wikipedia.org/wiki/FIFO_(computing_and_electronics)) (first in, first out) queue:

    ```mermaid
    flowchart LR
      A[Item] -.->|Enqueue| B[Back]
      subgraph Queue
          B --- C[Item]
          C --- D[Item]
          D --- E[Front]
      end
      E -.-> |Dequeue| F[Item]
    ```

  ### Time and Space Complexity (Big O Notation)

    | Operation     | Average     | Worst Case     |
    |:-------------:|:-----------:|:--------------:|
    | Search        |     O(n)    |      O(n)      |
    | Insert        |     O(1)    |      O(1)      |
    | Delete        |     O(1)    |      O(1)      |
    | Space         |     O(n)    |      O(n)      |

  """

  defstruct items: []

  @doc ~S"""
  Returns a new queue struct with an empty list of items by default.

  ## Example
      iex> Algorithms.Queue.new()
      %Algorithms.Queue{items: []}
  """
  def new, do: %__MODULE__{}

  @doc ~S"""
  Returns a new queue struct with the given list of items.

  ## Example
      iex> Algorithms.Queue.new([3, 2, 1])
      %Algorithms.Queue{items: [3, 2, 1]}
  """
  def new(items) when is_list(items) do
    %__MODULE__{items: items}
  end

  @doc ~S"""
  Insert an item at the back of the queue.

  The insert (**enqueue**) always takes ${\displaystyle O(1)}$ time.

  ## Examples

  ### Enqueue items to the queue

      iex> queue = Algorithms.Queue.new()
      iex> queue = Algorithms.Queue.enqueue(queue, "A")
      %Algorithms.Queue{items: ["A"]}
      iex> _queue = Algorithms.Queue.enqueue(queue, "B")
      %Algorithms.Queue{items: ["B", "A"]}

  ### Or using the pipe operator

      iex> Algorithms.Queue.new()
      iex> |> Algorithms.Queue.enqueue(1)
      iex> |> Algorithms.Queue.enqueue(2)
      %Algorithms.Queue{items: [2, 1]}
  """
  def enqueue(%__MODULE__{items: items}, item) do
    %__MODULE__{items: [item | items]}
  end

  @doc ~S"""
  Remove an item from the front of the queue.

  The removal or (**dequeue**) takes ${\displaystyle O(1)}$ when the list ${\displaystyle r}$ is not empty.

  ## Example

      iex> queue = Algorithms.Queue.new(["B", "A"])
      iex> %Algorithms.Queue{items: ["B", "A"]}
      iex> queue = Algorithms.Queue.dequeue(queue)
      %Algorithms.Queue{items: ["B"]}
      iex> _queue = Algorithms.Queue.dequeue(queue)
      %Algorithms.Queue{items: []}
  """
  def dequeue(%__MODULE__{items: items}) do
    %__MODULE__{items: List.delete_at(items, -1)}
  end
end
