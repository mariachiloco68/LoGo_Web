
  var user = localStorage.getItem('User');
  if(user==null){
    var html = ` <!DOCTYPE html>
                    <html lang="en" dir="ltr">
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
                      <body>
                        <div><h1>No te haz registrado a&uacute;n muchachit@ <br> :(</h1></div>
                      </body>
                    </html>
                 `;
     document.write(html);
     window.stop();
  }
