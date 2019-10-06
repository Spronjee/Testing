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
$myfile = fopen("Info.json", "w") or die("не удалось создать файл");
$json = "Name\n";
fwrite($fd, $json);
$json = "Surname";
fwrite($myfile, $json);
fclose($myfile);

$option = $_GET['option'];

if ( $option == 1 ) {
    $data = [ 'a', 'b', 'c' ];
    //  закодируем в массив JSON: ["a","b","c"]
    // result[1] (returns "b")
} else {
    $data = [ 'name' => 'God', 'age' => -1 ];
    //  закодируем в объект JSON:{"name":"God","age":-1}
    //  result.name or result['name'] (returns "God")
}

header('Content-type: application/json');
echo json_encode( $data );

?>
