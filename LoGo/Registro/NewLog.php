
<?php
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
     $sql = "SELECT ID_User,Email FROM Logo_Users";
        
    //Buscamos el ultimo arreglo
    $result = $conn->query($sql);
    //Generamos un arreglo
    $Data = Array();
    $stop = 0;
    
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
         array_push($Data,$row["ID_User"]);
         if($row['Email']==$_POST['email']){
             $stop = 1;
         }
      }
    } else {
      echo "0 results";
    }
    
    sort($Data); //Ordena el arreglo
    $last_id = count($Data);
    $last_id = $Data[$last_id-1];
    //echo $last_id;
    $last_id = (int)$last_id; //se trasforma a entero
    $last_id+=1;
    $len= strlen($last_id);
    $new = '';
    
    for($x = 0; $x < 6-strlen($last_id); $x++) {
      $new.='0'; 
    }
    $new = $new.$last_id;
    // $new es el nuevo id;

    if($stop==0){
        $sql = "INSERT INTO Logo_Users (ID_User,Username,Password,Email)
        VALUES ('".$new ."', ' " .$_POST['nombre']."','".$_POST['password']."','".$_POST['email']."')";
        
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
        
    
    $conn->close();
    
?>

 