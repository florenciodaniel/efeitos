
<!DOCTYPE html>
<html lang="pt-br">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Overlay Navigation</title>
      <link rel="stylesheet" href="css/estilo.css">
      <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
</head>

<body>
      <nav>
            <span id="brand">
                  <a href="index.html">Brand</a>
            </span>

            <ul id="menu">
                  <li><a href="#">Home</a></li>
                  <li><a href="#">About</a></li>
                  <li><a href="#">Contact</a></li>
                  <li><a href="#">FAQ</a></li>
            </ul>

            <div id="toggle">
                  <div class="span" id="one"></div>
                  <div class="span" id="two"></div>
                  <div class="span" id="three"></div>
            </div>
      </nav>

      <div id="resize">
            <ul id="menu">
                  <li><a href="#">Home</a></li>
                  <li><a href="#">About</a></li>
                  <li><a href="#">Contact</a></li>
                  <li><a href="#">FAQ</a></li>
            </ul>
      </div>

      <div class="content">
            <h1>Smooth Fade-Up Navigation</h1>
      </div>

      <script>

      $("#toggle").click(function() {

      $(this).toggleClass('on');
      $("#resize").toggleClass("active");

      });


      </script>
</body>
</html>