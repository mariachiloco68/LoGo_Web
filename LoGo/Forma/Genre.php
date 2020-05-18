<?php

    $genero = $_GET['genre'];
    
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
   
    $sql = "SELECT * FROM Song WHERE ID_Genre=".$genero."";
        
    $result = $conn->query($sql);
    
    $html='';
    
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
           $html.= '<tr>
                    <th scope="row">
                        <div class="img col-4" style="">
                            <a id="'.$row['ID_Song'].'" onclick="Play(this)">
                              <i name="play-pause" class="icon-play fas fa-play"></i>
                              <audio id="audio_'.$row['ID_Song'].'">
                                  <source src="Uploads/'.$row['Ubica'].'" type="audio/ogg">
                              </audio>
                            </a>
                        </div>
                    </th>
                    <td>
                      <div class="media-body">
                        Cancion: &nbsp;'.$row['Name'].' <br>
                        Autor:&nbsp; '.$row['Author'].' <br>
                        <i id="heart_'.$row['ID_Song'].'" class="icon fas fa-heart" onclick="Value(this);"></i>&nbsp;
                        <i id="frown_'.$row['ID_Song'].'" class="icon fas fa-frown" onclick="Value(this);"></i>&nbsp;
                        <i id="poo_'.$row['ID_Song'].'" class="icon fas fa-poo" onclick="Value(this);"></i>&nbsp;
                      </div>
                    </td>
                </tr>';
                 
      }
    } else {
      echo "0 results";
    }
    
    print $html;
    $conn->close();

?>