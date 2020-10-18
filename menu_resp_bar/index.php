
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Responsive Navigation Bar with HTML CSS and Javascript </title>
    <link rel="stylesheet" href="css/estilo.css">

    <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
  </head>
  <body>
    <div class="icon_menu">
        <img class="img_menu" src="img/download.png" alt=""/>
      </div>
    <nav class="nv">
      
      <ul class="lu">
        <a href="index.php"><lI class="il">home</lI></a>
        <a href="sobre.php"><lI class="il">sobre</lI></a>
        <a href="#"><lI class="il">contato</lI></a>
        <a href="#"><lI class="il">galeria</lI></a>
        <a href="#"><lI class="il">serviços</lI></a>
      </ul>
    </nav>
   
    <div class="fff">
      <img src="img/Capturar_2018_08_11_16_42_19_574.png" alt=""/>
    </div>
    
    <script type="text/javascript">
      
      $(document).ready(function(){
        $('.img_menu').click(function(){
          $('.lu').toggleClass('ativado');
        });
      });

//codigo de um outro projeto efeitos, que inclusive aparentemente funcionava neste projeto aqui ,deixei apenas para não perde-lo
//      $("nav div").click(function () {
//        $("ul").slideToggle();
//        $("ul ul").css("display", "none");
//      });
//
//      $("ul li").click(function () {
//        $("ul ul").slideUp();
//        $(this).find('ul').slideToggle();
//      });
//
//      $(window).resize(function () {
//        if ($(window).width() > 768) {
//          $("ul").removeAttr('style');
//        }
//      });

    </script>
  </body>
</html>
