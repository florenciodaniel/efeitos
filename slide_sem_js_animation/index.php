
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Slide com css sem js</title>
    <style>
      body{margin: 0; padding: 0; -webkit-box-sizing: border-box; box-sizing: border-box;}
      .slide{
        width: 100%;
        height: 100vh;
        position: absolute;
        overflow: hidden;
      }
      .slide img{
        width: 100%;
        height: 100vh;
        position: absolute;
        object-fit: cover;
      }
      .foto{
        position: absolute;
        opacity: 0;
        animation: animacao;
        animation-duration: 20s;
        animation-iteration-count: infinite;
      }
      @keyframes animacao{
        25%{
          opacity:1;
          transform:scale(1.05,1.05);
        }
        50%{
          opacity:0;
        }
      }
      .foto:nth-child(1){

      }
      .foto:nth-child(2){
        animation-delay: 5s;
      }
      .foto:nth-child(3){
        animation-delay: 10s;
      } 
      .foto:nth-child(4){
        animation-delay: 15s;
      }
      .sobslide{
        width: 100%;
        height: 100vh;
        position: absolute;
        top: 0;
        left: 0;
        background-color: rgba(0,0,0,0.3);
      }
      .sobslidecontent{
        width: 100%;
        height: 100vh;
        position: absolute;
        opacity: 0;
        animation: animacaotext;
        animation-duration: 20s;
        animation-iteration-count: infinite;
      }
      @keyframes animacaotext{
        10%{
          opacity:1;
          /*          transform:scale(1.05,1.05);*/
        }
        50%{
          opacity:0;
        }
      }
      .sobslidecontent:nth-child(1){

      }
      .sobslidecontent:nth-child(2){
        animation-delay: 5s;
      }
      .sobslidecontent:nth-child(3){
        animation-delay: 10s;
      } 
      .sobslidecontent:nth-child(4){
        animation-delay: 15s;
      }
      .sobslidecontent p{
        font-size: 45px;
        text-align: center;
        color: white;
        text-shadow:2px 2px 2px grey;
        padding-top: 30vh;
      }

    </style>
  </head>
  <body>
    <div class="slide">
      <img class="foto" src="b1.jpg">
      <img class="foto" src="b2.jpg">
      <img class="foto" src="b3.jpg">
      <img class="foto" src="b4.jpg">
    </div>
    <div class="sobslide">
      <div class="sobslidecontent"><p>Seus sonhos tem valor</p></div>
      <div class="sobslidecontent"><p>Corra atras dos teus sonhos</p></div>
      <div class="sobslidecontent"><p>Lute como se isso dependesse tudo</p></div>
      <div class="sobslidecontent"><p>use intelugencia e percistencia</p></div>
    </div>
    <br>
    <br><br><br><br><br><br><br><br><br>




  </body>
</html>