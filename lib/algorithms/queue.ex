defmodule Algorithms.Queue do
  @moduledoc ~S"""
  A queue is a collection of entities that are maintained in a sequence and can
  be modified by the addition of entities at one end of the sequence and the
  removal of entities from the other end of the sequence. By convention, the
  end of the sequence at which elements are added is called the back, tail, or
  rear of the queue, and the end at which elements are removed is called the
  head or front of the queue.

  ## Representation of a FIFO (first in, first out) queue
    flowchart LR
      A[Item] -.->|Enqueue| B[Back]
      subgraph Queue
          B --- C[Item]
          C --- D[Item]
          D --- E[Front]
      end
      E -.-> |Dequeue| F[Item]

  ## Big O Space and Time
    \begin{table}[]
    \begin{tabular}{lll}
    \multicolumn{3}{c}{\textbf{Time Complexity}}                \\
    \textbf{Operation} & \textbf{Average} & \textbf{Worst Case} \\
    Search             & O(n)             & O(n)                \\
    Insert             & O(1)             & O(1)                \\
    Delete             & O(1)             & O(1)                \\
    \multicolumn{3}{c}{\textbf{Space  Complexity}}              \\
    Space              & O(n)             & O(n)               
    \end{tabular}
    \end{table}

  ## Time complexity
    | **Operation** | **Average** | **Worst Case** |
    |:-------------:|:-----------:|:--------------:|
    | Search        |     O(n)    |      O(n)      |
    | Insert        |     O(1)    |      O(1)      |
    | Delete        |     O(1)    |      O(1)      |

  ## Space complexity
    |       | **Average** | **Worst Case** |
    |-------|:-----------:|:--------------:|
    | Space |     O(n)    |      O(n)      |
  """

  defstruct items: []

  def new, do: %__MODULE__{}

  def enqueue(%__MODULE__{items: items}, item) do
    %__MODULE__{items: [item | items]}
  end

  def dequeue(%__MODULE__{items: items}) do
    %__MODULE__{items: List.delete_at(items, -1)}
  end
end
