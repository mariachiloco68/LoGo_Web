<?php
    $correo = htmlspecialchars($_GET["email"]); //Recibido
    $contra_email = htmlspecialchars($_GET["password"]);//Recibido
    //echo $contra_email;
    //echo $correo;
    
    $servername = "localhost";
    $username = "iropneco_Log";
    $password = "T90Zabc.cba";
    $dbname = "iropneco_Logo";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    //Buscamos el ultimo id
     $sql = "SELECT * FROM Logo_Users WHERE Email='".$correo."'";
        
    //Buscamos el ultimo arreglo
    $result = $conn->query($sql);
    //Generamos un arreglo
    //$Data = Array();
    //$stop = 0;
    //$User = '';
    
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
         if($contra_email==$row["Password"]){
             echo $row["Username"];
         }else{
             echo "La contraseña o el correo estan mal";
         }
      }
    } else {
     echo "La contraseña o el correo estan mal";
    }
     $conn->close();
   
    
    

?>