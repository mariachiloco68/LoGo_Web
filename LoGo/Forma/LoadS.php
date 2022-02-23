<?php

    $email = $_GET['hack2'];

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

    $sql = "SELECT * FROM Logo_Users WHERE Email='".$email."'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        $Id = $row['ID_User'];
      }
    } else {
      echo "0 results";
    }


    $sql = "SELECT ID_Song,Name,Fecha FROM Song WHERE ID_User='".$Id."'";
    $result = $conn->query($sql);
    $Song = Array();
    $Name = Array();
    $Fecha = Array();

    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        array_push($Song,$row['ID_Song']);
        array_push($Name,$row['Name']);
        array_push($Fecha,$row['Fecha']);
        //echo $row['ID_Song'];
      }
    } else {
      echo "0 results";
    }

    $Corazon = Array();
    for($i=0; $i < count($Song); $i++){
        $sql = "SELECT COUNT(*) AS Num FROM Reac_User WHERE ID_Song='".$Song[$i]."' AND ID_Reac='01'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
            //echo $row['Num'];
             array_push($Corazon,$row['Num']);
          }
        } else {
          echo "0 results";
        }
    }

    $conn->close();
    $Data ='';
    for($i=0;$i < count($Song); $i++){
       // echo $Name[$i].$Fecha[$i].$Corazon[$i];
        $Data.='<tr>
                    <th scope="row">'.($i + 1).'</th>
                    <td>'.$Name[$i].'</td>
                    <td>'.$Fecha[$i].'</td>
                    <td>'.$Corazon[$i].'</td>
                </tr>';
    }

    print $Data;

?>
