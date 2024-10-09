<?php

class Nodo
{
    public $value;
    private $next = null;


    public function __construct($value)
    {
        echo "Creando nodo <br>";
        $this->value = $value;
    }

    public function setNext($next)
    {
        $this->next = $next;
    }

    public function getNext()
    {
        return $this->next;
    }
}
