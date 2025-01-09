<?php
//*php -S localhost:3000
echo "Hola, PHP\n";

// Hola mundo

/*
Este es
un 
comentario en 
varias lineas
*/

//echo "Hola, PHP";

/*
echo "Hola, PHP";
echo "Hola, PHP";
echo "Hola, PHP";
echo "Hola, PHP";
*/

//Variables
$my_string = "Esto es una cadena de texto\n";
$my_string = "Aquí cambio el valor de la cadena de texto";
echo $my_string . "\n" ;
echo gettype($my_string) . "\n";

$my_string = 5;
echo $my_string . "\n";
echo gettype ($my_string) . "\n";


$my_string = "Esto es una cadena de texto" . "\n";

$my_int = 9;
$my_int = $my_int + 2;
echo $my_int . "\n";
echo $my_int - 1 . "\n";
echo $my_int . "\n";
echo gettype($my_int) . "\n";

$my_double = 7.6;
echo gettype($my_double) . "\n";
echo $my_int + $my_double  . "\n";

$my_bool = true;
echo $my_bool . "\n";
$my_bool = false;
echo $my_bool == 0 . "\n";
echo gettype($my_bool) . "\n";

echo "el valor de mi integer es $my_int y el de my boolean es $my_bool. \n";

// Constantes
const MY_CONSTANT = "Valor de la constante";
echo MY_CONSTANT . "\n";

//Listas

$my_array = [$my_string, $my_int, $my_double];
echo gettype($my_array) . "\n" ;
echo $my_array[0] . "\n";
array_push($my_array, $my_bool);
print_r($my_array);
//echo $my_array[4] . "\n";


//Diccionario
$my_dict = array("string" => $my_string, "int" => $my_int, "bool" => $my_bool);
echo gettype($my_dict) . "\n";
print_r($my_dict);
echo $my_dict["int"] . "\n";

//Set estructura de datos
array_push($my_array, "Luis");
array_push($my_array, "Luis");
print_r($my_array);
print_r (array_unique($my_array));

//Flujos

for ($index =0; $index <= 10; $index++)
{
    echo $index . "\n";

}

foreach ($my_array as $my_item){
    echo $my_item . "\n";
}


$index = 0;
while ($index <= sizeof($my_array) - 1) {
    //Code..
    echo $my_array[$index]. "\n";
    $index++;


}




$my_int = 13;
$my_string = "Hola";


if ($my_int ==11 && $my_string == "Hola" ){
    echo "el valor es 11 . \n";
}
elseif ($my_int == 12 ||$my_string == "Hola"  ){
    echo "El valor es 12 \n";
}

else {
    echo "el valor no es 11 \n";
}


//Funciones

function print_number(int $my_number){
    echo $my_number . "\n";

}
print_number(10.8); //Tipado estático
print_number(11);
print_number(12);

class MyClass {
    public $name;
    public $age;

    function __construct($name, $age)
    {
        $this ->name = $name;
        $this ->age = $age;
    }

}

$my_class = new MyClass("Luis", 18);
print_r ($my_class);
echo $my_class -> name . "\n";
$my_class -> name = "Jeronimo";
echo $my_class -> name . "\n";
echo gettype($my_class) . "\n";







