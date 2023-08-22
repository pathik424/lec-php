<?php

class mobile
{
    public function sms()
    {
        echo  "sms<br>";
    }
    public function call()
    {
        echo  "call<br>";
    }
    protected function chat()
    {
        echo  "chat<br>";
    }
    private function gallary()
    {
        echo  "gallary<br>";
    }
} 

$object = new mobile;
$object->sms();
$object->call();
?>