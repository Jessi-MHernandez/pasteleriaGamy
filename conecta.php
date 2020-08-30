
  <?php
  //aqui estan los parametros de mi conexión
   $server='localhost';
   $usuario='root';
   $password='';
   $base='pasteleria';

     //Guarda la conexión en una variable $parametro del servidor...
        $conecta=mysqli_connect($server,$usuario,$password,$base);

 if(!$conecta){
  echo("Error en la conexión".php_EOL);                  //puede llevar el parentesis o no, 
  echo"Error del sistema" .mysqli_conect_error.PHP_EOL;  		//errores de mysql
 }

  else{
   //echo "Conexión exitosa".PHP_EOL;
 }

 ?>

 