<?php

interface Machine{

    public function task();
}

class Crical implements Machine{

    private $radius;

    public function __construct($radius)
    {
        $this->radius  = $radius;
    }

    public function task()
    {
        return $this->radius * $this->radius * pi();
    }
}

$xyz = new Crical(3);
echo $xyz->task();


?>