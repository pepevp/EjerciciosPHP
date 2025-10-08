<?php
    //variable a la que le asigno mi nombre
    $nombre="Jose Jesus Velazquez Perez";
    //Linea que muestra por pantalla el correspondiente mensaje con el contenido de la variable nombre
    echo "Hola, mi nombre es ", $nombre;
    //Constante con el valor de PI
    define("PI", 3.1416);
    //Linea que mete un salto de linea
    echo "<br></br>";
    //Linea que muestra por pantalla el valor de PI
    echo PI;
    //Linea que mete un salto de linea
    echo "<br></br>";
    //Variable Nombre con la n en mayúscula para comprobar que php diferencia entre mayúsculas y minúsculas
    $Nombre="Jesús Sanchez Catalán";
    echo "Hola, mi nombre es ", $Nombre;
?>

<?php
    //variable de tipo entero
    $numEntero = 7;
    //variable de tipo decimal
    $numDecimal = 2.4;
    //cadena
    $coches=["citroen","BMW","Audi"];
    //variable booleana
    $estaPagado=false;
    //mostrar por pantalla el valor de las anteriores variables
    echo "<br></br>";
    var_dump($numEntero);
    echo "<br></br>";
    var_dump($numDecimal);
    echo "<br></br>";
    var_dump($coches);
    echo "<br></br>";
    var_dump($estaPagado);

    //array asociativo
    $persona=["nombre"=> "Pepe", "edad"=>26, "ciudad"=>"Sevilla"];

    //Declaración de una constante
    define("NOMBRE_CURSO","Programación PHP");
    echo "<br></br>";
    //Mostrar el valor de la constante por pantalla
    echo NOMBRE_CURSO;
    echo "<br></br>";
    //array de numeros
    $numeros = [1, 2, 3, 4, 10];
    //Función que recibe un array de numeros por parametro y suma los valores 
    function sumaNumeros($numeros){
        //variable que contendrá la suma de los números del array
        $suma = 0;
        //bucle for para recorrer el array
        for($i = 0; $i < count($numeros); $i++){
            $suma = $suma + $numeros[$i];
        }
        //Linea que finaliza la función devolviendo la variable suma
        return $suma;
    }
    echo sumaNumeros($numeros);

    echo "<br></br>";
    //variable con valor nulo
    $variableNula = NULL;
    //condicional que comprueba si el valor de la variable es NULL o no y muestra un mensaje correspondiente
    if(is_null($variableNula)){
        echo "La variable tiene valor NULL";
    }else{
        echo "La variable no tiene valor NULL";
    }
?>