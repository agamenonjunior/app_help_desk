<?php

if(isset($_POST)){
    @$email = $_POST['email'];
    @$pass = $_POST['pass'];
}


 $usuarios = array(
     array('email'=>'agamenon@hot.com','pass'=>'123'),
     array('email'=>'agamenon2@hot.com','pass'=>'124563'),
     
 );

 echo("<pre>");
 print_r($usuarios);
 echo("</pre>");

foreach ($usuarios as $user) {
    echo 'E-mail: '.$user['email'].' - Senha:'.$user['pass'].'<br>';
}

?>