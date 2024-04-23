defmodule Algorithms.SinglyLinkedList.List do
  @moduledoc ~S"""
  Singly linked lists contain nodes which have a 'value' field as well as 'next'
  field, which points to the next node in line of nodes. Operations that can be
  performed on singly linked lists include insertion, deletion and traversal.

  A singly linked list whose nodes contain two fields:an integer value (data)
  and a link to the next node:

  ## Singly Linked List
    ```mermaid
    flowchart LR
      subgraph Head
          A[Node]
      end
      subgraph Tail
          A -.->|next| B[Node]
          B -.->|next| C[Node]
      end
      C -.->|next| D[nil]
    ```
  """
  defstruct head: nil

  def new, do: %__MODULE__{}

  def add_node(%__MODULE__{head: nil}, node), do: %__MODULE__{head: node}

  def add_node(%__MODULE__{head: head}, node) do
    %__MODULE__{head: Map.put(node, :next, head)}
  end

  def print_list(%__MODULE__{} = list), do: list |> as_string |> IO.puts()

  defp as_string(%__MODULE__{head: nil}), do: "[nil]"

  defp as_string(%__MODULE__{head: head}) do
    "[#{head.value}] -> " <> as_string(%__MODULE__{head: head.next})
  end
end
