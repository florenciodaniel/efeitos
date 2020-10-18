<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<!DOCTYPE html>
<html>
   <head>
      <title>teste</title>
      <link rel="stylesheet" href="estilo.css" type="text/css" >
      <script type="text/javascript" src="script.js"></script>
   </head>
   <body>

      <div id="conteudo">
         <div id="slideshow"> 
            <div id="slideArea">

               <div class="slide" style="background-image:url('8.jpg')">
                  <div id="slideInfo">
                     <div id="slideInfoTitulo">Título1</div>
                     <div id="slideInfoSubTitulo" style="color:#fff; font-size:14px; padding-left:10px;">SubTítulo</div>
                  </div>
               </div>
               <div class="slide" style="background-image:url('8.jpg')">
                  <div id="slideInfo">
                     <div id="slideInfoTitulo">Título2</div>
                     <div id="slideInfoSubTitulo" style="color:#fff; font-size:14px; padding-left:10px;">SubTítulo</div>
                  </div>
               </div>
               <div class="slide" style="background-image:url('8.jpg')">
                  <div id="slideInfo">
                     <div id="slideInfoTitulo">Título3</div>
                     <div id="slideInfoSubTitulo" style="color:#fff; font-size:14px; padding-left:10px;">SubTítulo</div>
                  </div>
               </div>
               <div class="slide" style="background-image:url('8.jpg')">
                  <div id="slideInfo">
                     <div id="slideInfoTitulo">Título4</div>
                     <div id="slideInfoSubTitulo" style="color:#fff; font-size:14px; padding-left:10px;">SubTítulo</div>
                  </div>
               </div>

            </div>

         </div>
         <button onclick="avancarSlide()">Avancar</button>
         <button onclick="voltarSlide()">voltar</button>
      </div> 
   </body>
</html>

