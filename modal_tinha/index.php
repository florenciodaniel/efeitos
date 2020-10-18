<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
  <head>
    <meta charset="UTF-8">
    <title>modal q  eu tinha</title>

    <link rel="stylesheet" href="css/estilo.css">
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
  </head>
  <body>
    <div class="galeriaContainer">
      <div class="galeria_titulo"><h1>Nossa galeria de fotos</h1></div>
      <div class="galeria_bloco">
        <div class="galeria_part">
           
          <div class="imagenDaGaleria">
            <a class="button_saiba" href="#janela1" rel="modal">
              <img src="img/filme.jpg">
            </a>
          </div>
           
          <div class="paragf"><p>cena fime</p></div>
          
          <div class="window" id="janela1">
            <a href="#" class="fechar">X Fechar</a>
            <img src="img/filme.jpg">
          </div>
          <!-- mascara para cobrir o site -->  
          <div id="mascara"></div>
        </div>



        <div class="galeria_part">
          <div class="imagenDaGaleria">
            <a class="button_saiba" href="#janela2" rel="modal">
              <img src="img/gostosa.jpg">
            </a>
          </div>
          <div class="paragf"><p>cena fime</p></div>
          <div class="window" id="janela2">
            <a href="#" class="fechar">X Fechar</a>
            <img src="img/gostosa.jpg">
          </div>
          <!-- mascara para cobrir o site -->  
          <div id="mascara"></div>
        </div>



      </div>
    </div>

  </body>
</html>
