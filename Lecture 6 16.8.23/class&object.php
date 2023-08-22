<?php

class mobile
{
  function sms()
{
    echo "sms<br>";
}
public function call()
{
    echo "call<br>";
}

protected function chat()
{
    echo "Chat<br>";
}
private function gallery()
{
    echo "gallery<br>";
}
   
}

$pathik = new mobile;
$pathik->sms();
$pathik->sms();
$pathik->call();
// $pathik->chat();
// $pathik->gallery();


?>