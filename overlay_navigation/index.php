<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Greensock Navigation | CODEGRID</title>
    <link rel="stylesheet" href="assets/css/estilo.css">

<!--    Bootstrap cdn-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>

<!-- icons-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<!--    Jquery cdn-->
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>

<!--    Greensock-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js"></script>
</head>
<body>
  <div class="bg">
      <div class="wrapper">
            <div class="menu-btn">
                  <button type="button"><i class="material-icons">menu</i></button>
            </div>

            <div class="menu">
                  <div class="row">
                        <div class="col-lg overlay">
                              <h1>MENU</h1>

                              <div class="nav">
                                    <ul>
                                          <li><div class="logo"></div></li>
                                          <li class="shuffle" data-changetext="EMOH">Home</li>
                                          <li class="shuffle" data-changetext="YROTS RUO">Our Story</li>
                                          <li class="shuffle" data-changetext="OILOFTROP">About</li>
                                          <li class="shuffle" data-changetext="TCATNOC">Contact</li>
                                    </ul>
                              </div>
                        </div>
                  </div>
            </div>
      </div>
    </div>
      <script type="text/javascript">

            $("li.shuffle").on("mouseover mouseout", function() {
                  var $this = $(this);
                  var sShowTxt = $this.data('changetext');
                  $this.data('changetext', $this.text());
                  $this.text(sShowTxt);
            });

            var t1 = new TimelineMax({paused: true});

            t1.to(".overlay", 1, {
                  opacity: 1,
                  ease: Expo.easeInOut
            });

            t1.staggerFrom(".menu ul li", 0.8, {y: 60, opacity: 0, ease: Expo.easeOut}, 0.1);

            t1.reverse();
            $(document).on("click", ".menu-btn", function() {
                  t1.reversed(!t1.reversed());
            });
      </script>
</body>
</html>
