<?php 

class one
{

    public $number;
        
    public function __construct($number)
    {
        $this->number=$number;
    }
    public function test()
    {
        echo "hi ";
        echo $this->number;
    }
 }
    $rob = new one(5);
    $rob->test();
