<?php
class User
{
    public $name;
    public $congrad;
    public $matricula;

    public function __construct($name, $congrad, $matricula)
    {
        $this->name = $name;
        $this->congrad = $congrad;
        $this->matricula = $matricula;
    }
}
