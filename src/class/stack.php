<?php

class Stack
{
    public $head;
    public $tail;

    public function __construct($arr = null)
    {
        if ($arr != null) {
            foreach ($arr as $value) {
                $this->push($value);
            }
        } else {
            $this->head = null;
            $this->tail = null;
        }
    }

    public function push($value)
    {
        $nodo = new Nodo($value);

        if ($this->isEmpty()) {
            $this->head = $nodo;
            $this->tail = $nodo;
        } else {
            $nodo->setNext($this->head);
            $this->head = $nodo;
        }
    }

    public function pop()
    {
        $this->head = $this->head->getNext();
    }

    //? Debo se;alar directamente el valor del nodo,
    //? si señalo sólo el nodo arrojará un error

    public function print()
    {
        if ($this->isEmpty()) {
            echo "Stack is empty <br>";
            return;
        }

        $current = $this->head;

        while ($current != null) {
            echo $current->value . "<br>";
            $current = $current->getNext();
        }
    }

    public function isEmpty()
    {
        return $this->head == null;
    }
}
