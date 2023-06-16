<?php

    function repitis( $n )
    {
        $salida = "";

        for( $i = 1; $i <= $n; $i ++ )
        {
            $salida .= $i." ".producto();
        }

        return $salida;
    }

    function producto(){

        $salida = "";

        $salida .= "<img src='img/".productos_aleatorios()."' style='width: 40px;'><br>";
        $salida .= "<div style='font-size: 30px;'>$560.000</div> <br>";
        $salida .= "<div style='font-size: 10px; color: gray;'>Samsung Galaxy ppeee</div> <br>";

        return $salida;
    }

    function productos_aleatorios()
    {
        $salida = "";

        if( rand( 0, 10 ) > 5 ){

            $salida = "cuaderno.webp";

        }else{

            $salida = "telefono.webp";
        }

        return $salida;
    } 