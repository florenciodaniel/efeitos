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
        <script type="text/javascript" src="menufixo.js"></script>
        <link rel="stylesheet" href="css/estilo.css">
    </head>
    <body>
    <div class="input_selecao">
    <input type="file" name="img1"class="submitFoto"id="Arquivo1"><br><br>
    <img id="img1" Name="img1"/>
    </div>
        <script>
           function enviar_imagem1(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function(e) {
      $('#img1').attr('src', e.target.result);
    };

    reader.readAsDataURL(input.files[0]);
  }
}

$("#Arquivo1").change(function() {
  enviar_imagem1(this);
});
       </script>

      
              
    </body>
</html>
