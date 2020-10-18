
<!DOCTYPE html>
<html lang="pt-br">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Typewriter Effect</title>
      <link rel="stylesheet" href="css/estilo.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
</head>
<body>
  <nav>
            <div>
                  <i class="fa fa-bars"></i>
            </div>

            <ul>
                  <li><a href="#">Home</a></li>
                  <li><a href="#">Drop 1 <i class="fa fa-sort-desc"></i></a>
                        <ul>
                              <li><a href="#">Product 1</a></li>
                              <li><a href="#">Product 2</a></li>
                              <li><a href="#">Product 3</a></li>
                              <li><a href="#">Product 4</a></li>
                        </ul>
                  </li>
                  <li><a href="#">Drop 2 <i class="fa fa-sort-desc"></i></a>
                        <ul>
                              <li><a href="#">Product 1</a></li>
                              <li><a href="#">Product 2</a></li>
                              <li><a href="#">Product 3</a></li>
                              <li><a href="#">Product 4</a></li>
                        </ul>
                  </li>
                  <li><a href="#">About</a></li>
                  <li><a href="#">FAQ</a></li>
            </ul>
      </nav>

      <script type="text/javascript">

      $("nav div").click(function() {
            $("ul").slideToggle();
            $("ul ul").css("display", "none");
      });

      $("ul li").click(function() {
            $("ul ul").slideUp();
            $(this).find('ul').slideToggle();
      });

      $(window).resize(function() {
            if($(window).width() > 768) {
                  $("ul").removeAttr('style');
            }
      });

      </script>
</body>
</html>