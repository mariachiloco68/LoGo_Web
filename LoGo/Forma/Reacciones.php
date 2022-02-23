<?php

    $cambia = $_POST['cambia'];
    $song = $_POST['song']; //id song
    $reaccion = $_POST['reaccion'];
    $R = searchReaction($reaccion);//R es el id de la reaccion
    if($cambia=='agrega'){
        $mainId = Last_Id();
        Agrega($mainId,$song,$R);
    }
    if($cambia=='elimina'){
        Elimina($song,$R);
    }

    function Elimina($song,$R){
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
         $sql = "SELECT * FROM `Reac_User` WHERE ID_Song='".$song."' AND ID_Reac='".$R."'";

        //Buscamos el ultimo arreglo
        $result = $conn->query($sql);
        $Data = Array();

        if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
                array_push($Data,$row['ID_Ru']);
          }
        } else {
          echo "0 results";
        }

        sort($Data); //Ordena el arreglo
        $last_id = count($Data);
        $last_id = $Data[$last_id-1];
        $sql = "DELETE FROM Reac_User WHERE ID_Ru='".$last_id."'";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }

    function searchReaction($reaccion){
        switch($reaccion){
            case "heart":
                return '01';
                break;
            case "frown":
                return '02';
                break;
            case "poo":
                return '03';
                break;
        }
    }

    //Funcion que busca el ultimo id en tabla
    function Last_Id(){
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
         $sql = "SELECT ID_Ru FROM `Reac_User`";

        //Buscamos el ultimo arreglo
        $result = $conn->query($sql);
        //Generamos un arreglo
        $Data = Array();

        if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
             array_push($Data,$row["ID_Ru"]);
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
        $conn->close();
        return $new;
    }

    function Agrega($mainId,$song,$R){
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

        $sql = "INSERT INTO Reac_User (ID_Ru,ID_Song,ID_Reac)
        VALUES ('".$mainId ."','" .$song."','".$R."')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }


?>
