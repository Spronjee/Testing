<?php
class Person
{
    function __construct($name, $surname)
    {
        $this->name = $name;
        $this->surname = $surname;
    }

}

$person = new Person('Name', 'Surname');
echo json_encode($person);
$myfile = fopen("Info.txt", "w") or die("не удалось создать файл");
$txt = "Name\n";
fwrite($fd, $txt);
$txt = "Surname";
fwrite($myfile, $txt);
fclose($myfile);


?>
