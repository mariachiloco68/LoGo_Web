<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
    
    <script src="Ver_User.js" charset="utf-8"></script>

    <title>LoGo</title>
    <link rel="icon" type="image/png" href="Vinyl_fondo.png"/>
    <style media="screen">
                      div{
                        background-color: #black;
                        opacity: 0.4;
                        text-align: center;
                        font-family:Ubuntu;
                        padding-top:50px;
                      }
                      h1{
                        font-size:100px;
                      }
                      body{
                        background: linear-gradient(90deg, #F4BA67, #FF44CF,#A74FF1);
                      }
                    </style>
    <!-- El siguiente script llama los iconos -->
    <!-- Links de estilos css -->
    <link rel="stylesheet" href="Fondo.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- sripts para librerias jquery y typejs -->
    <script src="https://static.codepen.io/assets/common/stopExecutionOnTimeout-157cd5b220a5c80d4ff8e0e70ac069bffd87a61252088146915e8726e5d9f147.js"></script>
    <!-- script para funcionalidades js -->
  </head>
  <body>
    <?php
    
        //var_dump($_FILES['file']);
        $directorio = "Uploads/";
        $archivo = $directorio . basename($_FILES["file"]["name"]); //direccion donde se guardara
        $tipo = strtolower(pathinfo($archivo, PATHINFO_EXTENSION));
        //echo $tipo;
        $name_song = $_POST['nombre'];
        $author = $_POST['autor'];
        $genre = $_POST['genero'];
        $email_user = $_POST['hack_1'];
        //echo $email_user;
        $name_archivo =  $_FILES['file']['name'];
        
        //$checarSiImagen = getimagesize($_FILES["file"]["tmp_name"]);
    
        //var_dump($size);
    
        //if($checarSiImagen != false){
    
            //validando tamaño del archivo
        $size = $_FILES["file"]["size"];
        
        if(strlen($name_archivo)<=30){
            if($size > 500000){
                echo "<h1>El archivo tiene que ser menor a 500kb</h1>";
            }else{
        
                //validar tipo de imagen
                if($tipo == "mp3"){
                    // se validó el archivo correctamente
                    if(move_uploaded_file($_FILES["file"]["tmp_name"], $archivo)){
                        //echo "<h1>El archivo se guardo correctamente</h1>";
                        
                        $id_user = search($email_user);
                        $last_id = Last_Id();
                        //echo $id_user;
                        //echo $last_id;
                        Guarda_Table($last_id,$name_song,$author,$genre,$id_user,$name_archivo);
                        
                    }else{
                        echo "<h1>Hubo un error en la subida del archivo</h1>";
                    }
                }else{
                    echo "<h1>Solo se admiten archivos mp3</h1>";
                }
            }
        }else{
                echo '<div><h1>El nombre de tu archivo es muy grande, no se admiten mayores de 30 caracteres<br> :(</h1></div>';
        }
            
        //}else{
        //    echo "El documento no es una imagen";
       // }
        
        //Buscamos el id asociado al email
        function search($email_user){
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
           
            $sql = "SELECT ID_User,Email FROM Logo_Users";
                
            //Buscamos el ultimo arreglo
            $result = $conn->query($sql);
            //Generamos un arreglo
            $id_user='';
            
            if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) {
                 if($row['Email']==$email_user){
                     $id_user=$row['ID_User'];
                 }
              }
            } else {
              echo "0 results";
            }
            $conn->close();
            
            return $id_user;
        }
        
        
        //Funcion que busca el ultimo id en tabla
        function Last_Id(){
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
            
             //echo "Los datos se estan guardando";
            
            $sql = "SELECT ID_Song FROM Song";
                
            //Buscamos el ultimo arreglo
            $result = $conn->query($sql);
            //Generamos un arreglo
            $Data = Array();
            
            if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) {
                 array_push($Data,$row["ID_Song"]);
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
            // $new es el nuevo id;
            return $new;
        }
        
        
        //Gaurda los datos en tabla
        function Guarda_Table($last_id,$name_song,$author,$genre,$id_user,$name_archivo){
            
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
            
            $sql = "INSERT INTO Song (ID_Song,Name,Author,ID_User,ID_Genre,Ubica,Fecha)
            VALUES ('".$last_id ."', ' " .$name_song."','".$author."','".$id_user."','".$genre."','".$name_archivo."',CURRENT_TIME())";
            
            if ($conn->query($sql) === TRUE) {
                echo '<div><h1>Registro exitoso, eres un Campeon<br> :)</h1></div>';
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            
            $conn->close();
            
        }
    
    ?>
    <script>setTimeout(function(){ window.location.href = '../Principal/Forma.php';}, 3000);</script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
