
  <?php
  //aqui estan los parametros de mi conexi�n
   $server='localhost';
   $usuario='root';
   $password='';
   $base='pasteleria';

     //Guarda la conexi�n en una variable $parametro del servidor...
        $conecta=mysqli_connect($server,$usuario,$password,$base);

 if(!$conecta){
  echo("Error en la conexi�n".php_EOL);                  //puede llevar el parentesis o no, 
  echo"Error del sistema" .mysqli_conect_error.PHP_EOL;  		//errores de mysql
 }

  else{
   //echo "Conexi�n exitosa".PHP_EOL;
 }

 ?>

 