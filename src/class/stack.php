<?php

require_once 'nodo.php';

class Stack
{
    public $head;
    public $tail;

    public function __construct($arr = null)
    {
        if ($arr != null) { // si le paso un array, lo carga en la pila
            foreach ($arr as $value) {
                $this->push($value['value']);
            }
        } else { // si no le paso un array, entonces head y tail serán null (la pila estara vacia)
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
        if ($this->head instanceof Nodo) {
            $this->head = $this->head->getNext();
        } else {
            echo "Stack is empty <br>";
        }
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
            if ($current instanceof Nodo) {
                echo $current->value . "<br>";
                $current = $current->getNext();
            } else {
                break;
            }
        }
    }

    public function isEmpty()
    {
        return $this->head == null;
    }
}
