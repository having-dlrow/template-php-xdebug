<?php

class TestController
{
    public function index()
    {
        $a = 10;
        $b = 20;

        $c = $a + $b;
        return $c;
    }

}

echo var_dump((new TestController())->index());
