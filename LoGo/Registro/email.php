<?php

    $correo = htmlspecialchars($_GET["email"]); //Recibido
    $servername = "localhost";
    $username = "iropneco_Log";
    $password = "123";
    $dbname = "iropneco_Logo";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    //Buscamos el ultimo id
     $sql = "SELECT Email FROM Logo_Users";

    //Buscamos el ultimo arreglo
    $result = $conn->query($sql);
    //Generamos un arreglo
    $Data = Array();
    $stop = 0;

    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
         if($row["Email"]==$correo){
             $stop = 1;
         }
      }
    } else {
      echo "0 results";
    }

    if($stop == 1){
        echo "existe"; //Imprime uno si existe
    }else{
        echo "no existe";
    }

     $conn->close();
?>
