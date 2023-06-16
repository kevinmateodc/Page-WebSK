<?php
     //conexion con la base de datos y el servidor 
     $link=mysql connected("localhost", "root","")  
     $db= mysql_select_db("usuarios", $link) 

    //obtenemos los valores del formulario 
    $nombre =$_POST['']
    $correo =$POST
    $telefono =$POST
    $producto =$POST

    //obtiene la longitud de un string 
    $req = (strlen ($nombre)*trlen ($correo))*strlen($telefono)*strlen ($producto)


    //ingresar informacion a la base de datos
    mysql_admin("INSERT INTO datos VALUES ('', 'precio', 'cantidad', 'empresa')",$link)
          ?>
