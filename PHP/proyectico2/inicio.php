<?php

  include( "vista.php" ); 

?>

<html>
  <head>
    <title></title>
  </head>

  <?php if( rand( 1, 10 ) > 5 ){ ?>

    <img src='img/encabezado.png' style='width: 100%;'>

  <?php }else{ ?>

    <img src='img/encabezado2.png' style='width: 100%;'>

  <?php } ?>

  <body style='font-family: Tahoma;'>

  <?php
    
    
    echo repitis( 100 );

    //echo date("m"); 

    echo date("i");

  ?>

  <img src="img/pata.png"  style='width: 100%;'>

  </body>
</html>