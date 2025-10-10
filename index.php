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
    echo "<br></br>";
?>


<?php
    $a = 10;
    $b = 2;

    //operaciones aritméticas
    echo $a + $b;
    echo "<br></br>";
    echo $a - $b;
    echo "<br></br>";
    echo $a * $b;
    echo "<br></br>";
    echo $a / $b;
    echo "<br></br>";
    echo $a % $b;
    echo "<br></br>";

    //Comprobar que variable es mayor
    if($a > $b){
        echo "a es mayor que b";
    }else{
        echo "b es mayor que a";
    }
    echo "<br></br>";

    //operador ternario
    $resultado = ($a % 2 == 0) ? "Par" : "Impar";
    echo "El número es: ", $resultado;
    echo "<br></br>";

    //Comprobar que ambas variables sean mayor que 10
    if($a > 10 && $b > 10){
        echo "a y b son mayores que 10";
    }else{
        echo "a y b no son mayores que 10";
    }
    echo "<br></br>";

    //Prueba de operadores de incremento
    $x=5;
    $y=12;

    echo ++$x;
    echo "<br></br>";

    echo $x++;
    echo "<br></br>";

    echo $x;
    echo "<br></br>";

    //Prueba de operadores de incremento
    echo --$y;
    echo "<br></br>";

    echo $y;
    echo "<br></br>";

    echo $y--;
    echo "<br></br>";

    echo $y;
    echo "<br></br>";
?>

<?php
    $numero1=-1;

    if($numero1<0){
        echo "el numero es negativo";
    }else{
        if($numero1>0){
            echo "el numero es positivo";
        }else{
            echo "el numero es 0";
        }
    }

    echo "<br></br>";

    //for para mostrar los numeros del 1 al 10
    for ($i=1; $i<11; $i++) {
    echo "$i"," ";
    }
    echo "<br></br>";

    $sumaTotal = 0;

    $i = 0;
    //while para sumar los números del 1 al 100
    while($i <100){
        $i++;
        $sumaTotal = $sumaTotal + $i;

    }
    echo $sumaTotal;

    echo "<br></br>";
    $dia = 5;
    //Estructura de switch
    switch ($dia) {
        case 1:
            echo "Lunes";
            break;
        case 2:
            echo "Martes";
            break;
        case 3:
            echo "Miercoles";
            break;
        case 4:
            echo "Jueves";
            break;
        case 5:
            echo "Viernes";
            break;
        case 6:
            echo "Sábado";
            break;
        case 7:
            echo "Domingo";
            break;
    }
    echo "<br></br>";
    //array
    $colores =["naranja", "amarillo","rojo","azul","verde","morado"];
    //Estructura foreach para mostrar el array completo
    foreach ($colores as $color) {
        echo $color, " ";
    }
?>