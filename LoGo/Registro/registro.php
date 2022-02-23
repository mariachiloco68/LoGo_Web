<!DOCTYPE html>
<html lang="" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>LoGo</title>
    <link rel="icon" type="image/png" href="Vinyl_fondo.png"/>
    <script src="https://kit.fontawesome.com/d35634e60e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="Estilo.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  </head>
  <body>
    <header id="main">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="../Principal/Forma.php">
          <div class="container">
            <svg viewBox="0 0 760 300">
              <symbol id="s-text">
                <text text-anchor="middle" x="50%" y="50%">LoGo</text>
              </symbol>
              <g class = "g-ants">
                <use xlink:href="#s-text" class="text-copy"></use>
                <use xlink:href="#s-text" class="text-copy"></use>
                <use xlink:href="#s-text" class="text-copy"></use>
                <use xlink:href="#s-text" class="text-copy"></use>
                <use xlink:href="#s-text" class="text-copy"></use>
              </g>
            </svg>
          </div>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item">
              <a class="home nav-link" href="../Principal/Forma.php" title="Home" ><i class="home fas fa-home"></i></a>
            </li>
            <li class="nav-item">
              <a class="contenido nav-link" href="../Principal/Profiel.html" title="Tu contenido" ><i class="contenido fas fa-record-vinyl"></i></a>
            </li>
            <li class="nav-item">
              <a class="subir nav-link" href="../Principal/Cargar.html" title="Cargar contenido" ><i class="subir fas fa-cloud-upload-alt"></i></a>
            </li>
          </ul>
        </div>
      </nav>
    </header>


    <div class="container-fluid">
      <br>
      <div class="row justify-content-around">
        <div class="col-4">
          <div class="card text-white bg-primary mb-3">
            <div class="card-header">Registrate para continuar</div>
            <div class="card-body">
              <h5 class="card-title">¡Listo para disfrutar!</h5>
              <p class="card-text">Sube tu múscia y documentos favoritos para que más personas te conozcan y compartan tus logros musicales.</p>
            </div>
          </div>
          <img src="violin.gif">
        </div>
        <div class="col-4" >
          <div class="card-deck">
            <div class="card bg-primary mb-4" >
              <img src="shdance-15.gif" class="card-img-top"  alt="Permite que ... ">
              <div class="card-body">
                <h5 class="card-title">Ingresa ahora</h5>
              </div>
              <div class="container-fluid">
                  <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" id="email_in" aria-describedby="emailHelp">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="password_in">
                  </div>
                  <button id="In" class="btn btn-secondary">Enviar</button>
                </div>
            </div>
          </div>
        </div>

        <div class="col-4">
            <div class="card text-white bg-primary">
              <div class="card-header" style="text-align:center;">REGISTRATE
              <br>
               <small>Solo puedes usar una cuenta de correo</small>
              </div>
              <div class="card-body">
                 <div class="form-group">
                    <input type="text" id="nombre" class="form-control" placeholder="Nombre de Usuario"  maxlength="10" required>
                  </div>
                  <div class="form-group">
                    <input type="email" id="email" class="form-control" placeholder="name@example.com" maxlength="30" required>
                  </div>
                  <div class="form-group">
                    <input type="password" id="password" class="form-control" placeholder="Password maximo 6 caracteres" required>
                  </div>
                  <div class="form-group">
                    <input type="password" id="cpassword" class="form-control" placeholder=" Confirm Password" maxlength="6" required>
                   </div>
                    <button id="send" value="Registrar" type="submit" class= "btn btn-secondary">Enviar</button>
              </div>
            </div>
         
        </div>
    </div>
    </div>
    <script>
        //Entrar
        document.getElementById('In').addEventListener('click',function(event){
           let email = document.getElementById('email_in').value;
           let contra = document.getElementById('password_in').value;
           
           $.get("New_In.php?email="+email+"&password=" + contra,function(Data, status){
                    //alert(Data);
                    //Data = Data.trim();
                    if(Data=='La contraseña o el correo estan mal'){
                        alert('La contraseña o el correo estan mal');
                    }else{
                        //alert(email);
                        localStorage.setItem('User',Data);
                        localStorage.setItem('Hack_1',email);
                        window.location.href = '../Principal/Forma.php';
                    }
                    
                  
                 
               });
        });
        //Registrar
        document.getElementById('send').addEventListener('click',function(event){
            
            <?php
             $lo="Variable php";
            ?>
            console.log( "<?php echo $lo; ?>");
            var name = document.getElementById('nombre').value;
            var email = document.getElementById('email').value;
            var contra = document.getElementById('cpassword').value;
            
            var exp = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
            var aux = 1;
            if (exp.test(email)){
               console.log("La dirección de email " + email + " es correcta.");
              /*
               $.get("email.php?email=" + email,function(Data, status){
                  //alert(Data);
                  if(Data=='existe'){
                      alert("El correo electronico ya esta registrado");
                       localStorage.setItem('Stop', 'si');
                  }
                  return aux;
               });
               */
              } else {
               console.log("La dirección de email es incorrecta.");
               aux = 0;
              }
              
            if(name=='' || email == '' || contra == '' || aux == 0){
                alert("Registra bien los datos");
                 event.preventDefault();
            }else{
                    var cat = localStorage.getItem('Stop');
                    
                     $.ajax({
                        // la URL para la petición
                        url : 'NewLog.php',
                        data : { 
                                 nombre : name,
                                 email: email,
                                 password: contra,
                               },
                        type : 'POST',
                        // código a ejecutar si la petición es satisfactoria;
                        // la respuesta es pasada como argumento a la función
                        success : function(data) {
                            alert("Espere un momento");
                            setTimeout(function(){ 
                                localStorage.setItem('User', name);
                                localStorage.setItem('Hack_1',email);
                                window.location.href = '../Principal/Forma.php';
                            }, 3000);
                        },
                        error : function(xhr, status) {
                            alert('Disculpe, existió un problema');
                        },
                        // código a ejecutar sin importar si la petición falló o no
                        complete : function(xhr, status) {
                            
                            
                        }
                    });
                    localStorage.removeItem('Stop');
                
                  
            }
            
        });
        
    </script>
       <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  </body>
</html>
