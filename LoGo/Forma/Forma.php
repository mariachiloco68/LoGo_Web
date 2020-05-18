<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>LoGo</title>
    <link rel="icon" type="image/png" href="Vinyl_fondo.png"/>
    <!-- El siguiente script llama los iconos -->
    <script src="https://kit.fontawesome.com/d35634e60e.js" crossorigin="anonymous"></script>
    <!-- Links de estilos css -->
    <style>
        th,td,tr{
            color: white;
        }
    </style>
    <link rel="stylesheet" href="Positions.css">
    <link rel="stylesheet" href="Fondo.css">
    <link rel="stylesheet" href="Buttons.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- sripts para librerias jquery y typejs -->
    <script src="https://static.codepen.io/assets/common/stopExecutionOnTimeout-157cd5b220a5c80d4ff8e0e70ac069bffd87a61252088146915e8726e5d9f147.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.6/typed.js"></script>
    <!-- script para funcionalidades js -->
    <script src="animacion_1.js"></script>
    <script src="Iconos.js"></script>
    <link rel="stylesheet" href="style_css.css">
  </head>
  <body>

    <!-- cabeza del html -->
    <header id="main">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="Forma.php">
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
              <a class="home nav-link" href="Forma.php" title="Home" ><i class="home fas fa-home"></i></a>
            </li>
            <li class="nav-item">
              <a class="contenido nav-link" href="Profiel.html" title="Tu contenido" ><i class="contenido fas fa-record-vinyl"></i></a>
            </li>
            <li class="nav-item">
              <a class="subir nav-link" href="Cargar.html" title="Cargar contenido" ><i class="subir fas fa-cloud-upload-alt"></i></a>
            </li>
          </ul>
          <form id="iv" class="form-inline">
            <input class="buscador form-control bg-dark" type="search" placeholder="Search" style="color: #98E8AD; border: 1px solid #5AF382;">
            <button id="Busca" type="button" class="btn btn-outline-success"><i class="fas fa-search"></i></button>&nbsp;
            <a href="http://iropne.com/MAU/PROYECTO/Registro/registro.php">
                <button id="Registrar" class="btn btn-outline-info"  type="button">Registrar / Entrar
                </button>
            </a>
          </form>
        </div>
      </nav>
    </header>

    <!--script para que aparezca el input de busqueda -->


    <div id="div_main">
      <div class="container-fluid" >
        <div class="row justify-content-around">
          <div class="col-7">
            <div class="jumbotron">
              <div class="trans">
                <h1 class="transp display-5">Bienvenido</h1>
                <div class="header">
                  <div class="caption">
                    <p id="types"></p>
                    <hr>
                    <p style="font-family: 'Courier New', Courier, 'Andale Mono', 'Lucida Console', monospace;">La única verdad es la música. – Jack Kerouac</p>
                    <span class="typed-cursor"></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card border col-5 overflow-auto" style="max-width: 450px; max-height: 340px; border: 1px solid #91FFC9;">
              <div class="card-header">Agregados recientemente</div>
              <div class="card-body">
                <div class="container-fluid" style="margin-bottom:25px;">
                  <div class="media row justify-content-around" style="">
                      <div class="img col-4" style="">
                        <a id="1" onclick="Play(this)">
                          <i name="play-pause" class="icon-play fas fa-play"></i>
                        </a>
                      </div>
                      <div class="col-7 media-body">
                        Cancion:  <br>
                        Autor: <br>
                        <i class="icon fas fa-heart" onclick="Value(this);"></i>&nbsp;
                        <i class="icon fas fa-frown" onclick="Value(this);"></i>&nbsp;
                        <i class="icon fas fa-poo" onclick="Value(this);"></i>&nbsp;
                      </div>
                      <div class="w-100"></div>
                  </div>

                  <div class="media row justify-content-around" style="">
                      <div class="img col-4" style="">
                        <a id="2" onclick="Play(this)">
                          <i name="play-pause" class="icon-play fas fa-play"></i>
                        </a>
                      </div>
                      <div class="col-7 media-body">
                        Cancion:  <br>
                        Autor: <br>
                        <i class="icon fas fa-heart" onclick="Value(this);"></i>&nbsp;
                        <i class="icon fas fa-frown" onclick="Value(this);"></i>&nbsp;
                        <i class="icon fas fa-poo" onclick="Value(this);"></i>&nbsp;

                       </div>
                      <div class="w-100"></div>
                  </div>

                  <div class="media row justify-content-around" style="">
                      <div class="img col-4" style="">
                        <a id="3" onclick="Play(this)">
                          <i name="play-pause" class="icon-play fas fa-play"></i>
                        </a>
                      </div>
                      <div class="col-7 media-body">
                        Cancion:  <br>
                        Autor: <br>
                        <i class="icon fas fa-heart" onclick="Value(this);"></i>&nbsp;
                        <i class="icon fas fa-frown" onclick="Value(this);"></i>&nbsp;
                        <i class="icon fas fa-poo" onclick="Value(this);"></i>&nbsp;
                      </div>
                      <div class="w-100"></div>
                  </div>

                  <div class="media row justify-content-around" style="">
                      <div class="img col-4" style="">
                        <a id="4" onclick="Play(this)">
                          <i name="" class="icon-play fas fa-play"></i>
                        </a>
                      </div>
                      <div class="col-7 media-body">
                        Cancion:  <br>
                        Autor: <br>
                        <i class="icon fas fa-heart" onclick="Value(this);"></i>&nbsp;
                        <i class="icon fas fa-frown" onclick="Value(this);"></i>&nbsp;
                        <i class="icon fas fa-poo" onclick="Value(this);"></i>&nbsp;
                      </div>
                      <div class="w-100"></div>
                  </div>

                </div>
              </div>
          </div>
          <div class="w-100"><br><br></div>
        </div>

        <!-- div de los cuadro azul -->
        <div id="block" class="row justify-content-around">
            <button class="col-2 genre" id="Rock" value="000001" onclick="Genre(this)" >Rock</button>
            <button class="col-2 genre" id="Blues" value="000002" type="button" name="button" onclick="Genre(this)" >Blues</button>
            <button class="col-2 genre" id="Jazz" value="000003" type="button" name="button" onclick="Genre(this)" >Jazz</button>
            <button class="col-2 genre" id="House" value="000004" type="button" name="button" onclick="Genre(this)" >House</button>
            <button class="col-2 genre" id="Dance" value="000005" type="button" name="button" onclick="Genre(this)" >Dance</button>
            <button class="col-2 genre" id="Pop" value="000006" type="button" name="button" onclick="Genre(this)" >Pop</button>
            <div class="w-100"></div>
            <br><br>
            <div class="col-12">
              <!-- Resultados de consulta -->
              <div class="container">
                  <table id="insert-data" class="table table-striped table-ligth">
                    <thead>
                      <tr>
                        <th scope="col">Cancion</th>
                        <th scope="col">Informacion</th>
                      </tr>
                    </thead>
                    <tbody id="Genero">
                        
                            
                        
                    </tbody>
                  </table>
                </div>
            </div>
        </div>
      </div>
    </div>


    <footer class="bg-dark">
      @LoGo
    </footer>
    <!-- Apartado para scripts -->
    <script type="text/javascript">
      var user = localStorage.getItem('User');
      if(user!=null){
        var singOut = `<a href="" id="out" class="subir nav-link" title="Salir corriendo" ><i class="fas fa-running"></i></a><span class="badge badge-dark">` + user + `</span>`;
        document.getElementById('iv').insertAdjacentHTML("afterend",singOut);
        var r = document.getElementById("Registrar");
        p = r.parentNode;
		    p.removeChild(r);
      }
      
      document.getElementById('Rock').click();
      function Genre(genero){
        var genre = genero.value;
        var existe = document.getElementById('Genero');
            if(existe){
                var padre = existe.parentNode;
		        padre.removeChild(existe);
            }else{
               
            }
             $.get("Genre.php?genre=" + genre,function(Data, status){
                     var html = document.getElementById('insert-data');
                     html.insertAdjacentHTML("beforeend",'<tbody id="Genero"></tbody>');
                     var  existe = document.getElementById('Genero');
                     existe.insertAdjacentHTML("beforeend",Data);
                    
             });
      }
      
     // Funcion que reproduce la cancion
    function Play(valor){
        var id = valor.id;
        let reproduce = document.getElementById('audio_'+id);
        //el id del a alert(id);
        var i = document.getElementById(id).childNodes;
        //console.log(i);
        var clase = i[1].className;
        if(clase=='icon-play fas fa-play'){
          var exist = document.getElementsByClassName('icon-play fas fa-pause');
          //var deten = exist[0].parentNode;
          if(exist.length==0){
            i[1].className = 'icon-play fas fa-pause';
            i[1].setAttribute('name','play_now');
            reproduce.play();
          }else{
              //Cuando un audio se esta reproduciendo
            exist[0].className = 'icon-play fas fa-play';
            var now_play = document.querySelector("[name=play_now]");
            now_play.removeAttribute('name');
            now_play = now_play.parentNode;
            now_play = now_play.id;
            now_play = document.getElementById('audio_'+now_play);
            now_play.currentTime = 0;
            now_play.pause();
            i[1].className = 'icon-play fas fa-pause'; //la que debe reproducirse
            i[1].setAttribute('name','play_now');
            console.log(i[1].parentNode);
          }
        }
        if(clase=='icon-play fas fa-pause'){
          i[1].className = 'icon-play fas fa-play';
          reproduce.currentTime = 0;
          reproduce.pause();
          i[1].removeAttribute('name');
        }
    }
    
    
    
    function Value(like){
        var icono = like.className;
        var l = like.id;
        let icon_select;
        
        switch (icono) {
          case 'icon fas fa-heart':
            icon_select = 'heart';
            Icons(like,icon_select,l,'frown','poo');
            break;
          case 'icon fas fa-frown':
             icon_select = 'frown';
             Icons(like,icon_select,l,'heart','poo');
            break;
          case 'icon fas fa-poo':
              icon_select = 'poo';
              Icons(like,icon_select,l,'heart','frown');
            break;
        }
        
            
        function Icons(like,icon_select,l,icon_1,icon_2){
            l = l.split(icon_select+'_',2);
            l = l[1];//Id de la cancion
            let i1 = document.getElementById(icon_1+'_'+l);
            let i2 = document.getElementById(icon_2+'_'+l);
            //console.log(l);
            
            if (like.style.color == 'rgb(255, 127, 127)') {
              like.style.color = 'white';
              //Ajax para eliminar la reaccion
              $.ajax({
                    // la URL para la petición
                    url : 'Reacciones.php',
                    data : { 
                             cambia : 'elimina',
                             song: l,
                             reaccion: icon_select,
                           },
                    type : 'POST',
                    // código a ejecutar si la petición es satisfactoria;
                    // la respuesta es pasada como argumento a la función
                    success : function(data) {
                    
                    },
                    error : function(xhr, status) {
            
                    }
                });
            }else{
                //eliminamos el que esta actualmente seleccionado
                if(i1.style.color == 'rgb(255, 127, 127)'){
                    //ajax para eliminar icon_1
                    $.ajax({
                        // la URL para la petición
                        url : 'Reacciones.php',
                        data : { 
                                 cambia : 'elimina',
                                 song: l,
                                 reaccion: icon_1,
                               },
                        type : 'POST',
                        // código a ejecutar si la petición es satisfactoria;
                        // la respuesta es pasada como argumento a la función
                        success : function(data) {
                        
                        },
                        error : function(xhr, status) {
                
                        }
                    });
                    
                }
                if(i2.style.color == 'rgb(255, 127, 127)'){
                    //ajax para eliminar icon_2
                    $.ajax({
                        // la URL para la petición
                        url : 'Reacciones.php',
                        data : { 
                                 cambia : 'elimina',
                                 song: l,
                                 reaccion: icon_2,
                               },
                        type : 'POST',
                        // código a ejecutar si la petición es satisfactoria;
                        // la respuesta es pasada como argumento a la función
                        success : function(data) {
                        
                        },
                        error : function(xhr, status) {
                
                        }
                    });
                }
                //Ajax para guardar reaccion
                i1.style.color = 'white';
                i2.style.color = 'white';
                like.style.color = '#FF7F7F';
                $.ajax({
                    // la URL para la petición
                    url : 'Reacciones.php',
                    data : { 
                             cambia : 'agrega',
                             song: l,
                             reaccion: icon_select,
                           },
                    type : 'POST',
                    // código a ejecutar si la petición es satisfactoria;
                    // la respuesta es pasada como argumento a la función
                    success : function(data) {
                    
                    },
                    error : function(xhr, status) {
            
                    }
                });
              
            }
    
        }
    }
    </script>

    <script src="Out.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>

