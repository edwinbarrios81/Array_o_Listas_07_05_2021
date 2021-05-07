<?php
    
    $lista = (array) [
        (string) 'Edwin Barrios',
        (int) 3,
        (bool) true,
        (object) function (string $p1): string{
            return "Hola Mundo $p1";
        },
        (array) [(string) 'Barrios', (string) 'Almeida']
    ];

    for ($i=0; $i < count($lista); $i++) {
        if(gettype($lista[$i]) == 'object'){
            echo (string) <<<DATOS
                ${!${''} = $lista[$i]('soy Edwin')} <br>
            DATOS;
        }
        else if(gettype($lista[$i]) == 'array'){
            echo (string) <<<DATOS
                ${!${''} = join(' ', $lista[$i])}
            DATOS;   
        }
        else echo "$lista[$i] <br>";
    }

?>
© 2021 GitHub, Inc.