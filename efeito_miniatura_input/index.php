<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
   <head>
      <meta charset="UTF-8">
      <title></title>
      <script type="text/javascript" src="jquery-3.1.1.min.js"></script>
      <link rel="stylesheet" href="assets/css/estilo.css">
   </head>
   <body>


      <fieldset class="Img">
         <input type="file" id="Arquivo" name="Arquivo" class="Open" />
         <img id="Tela" Name="Tela">
      </fieldset>

      <script>function enviar_imagem(input) {
            if (input.files && input.files[0]) {
               var reader = new FileReader();

               reader.onload = function (e) {
                  $('#Tela').attr('src', e.target.result);
               };

               reader.readAsDataURL(input.files[0]);
            }
         }

         $("#Arquivo").change(function () {
            enviar_imagem(this);
         });</script>       

   </body>
</html>
