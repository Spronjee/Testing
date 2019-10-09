<?php

class Person
{
    function __construct($login, $password)
    {
        $this->login = $login;
        $this->password = $password;
    }

}

$data = $_POST;

$person = new Person($data['username'], $data['password']);
$myfile = fopen("Info.json", "w+") or die("не удалось создать файл");
$json = json_encode($person);
fwrite($myfile, $json);
fclose($myfile);

?>
