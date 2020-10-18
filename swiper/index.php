
<!DOCTYPE html>
<html lang="pt-br">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Swiper</title>
      <link rel="stylesheet" href="css/estilo.css">
      <link href="css/swiper.min.css" rel="stylesheet" type="text/css"/>
</head>

<body>
<!--    <img src="img/01.jpg" alt=""/>-->
<!--    <img src="img/woman-sitting-on-grass-holding-flowers-wearing-black-hoodie-1007877.jpg" alt=""/>-->
<!--    <div style="background-image:url(img/07.jpg)">gbhnsdjgndmkfyu,fk,g,g,,ig,g</div>-->
    <div class="swiper-container">
                <div class="swiper-wrapper">
                    
                    <div class="swiper-slide" style="background-image:url('img/01.jpg')"></div>
                    <div class="swiper-slide" style="background-image:url(img/02.jpg)"></div>
                    <div class="swiper-slide" style="background-image:url(img/03.jpg)"></div>
                    <div class="swiper-slide" style="background-image:url(img/04.jpg)"></div>
                    <div class="swiper-slide" style="background-image:url(img/05.jpg)"></div>
                    <div class="swiper-slide" style="background-image:url(img/06.jpg)"></div>
                    <div class="swiper-slide" style="background-image:url(img/07.jpg)"></div>
                </div>
<!--                 Add Pagination -->
                <div class="swiper-pagination"></div>
            </div>
    
  <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
  <script src="js/swiper.min.js" type="text/javascript"></script>
  <script>
       var swiper = new Swiper('.swiper-container', {
                effect: 'coverflow',
                grabCursor: true,
                centeredSlides: true,
                slidesPerView: 'auto',
                coverflowEffect: {
                    rotate: 20,
                    stretch: 0,
                    depth: 300,
                    modifier: 1,
                    slideShadows: true
                },
                loop:true,
                autoplay:{
                    delay:2500,
                    disableOnInteraction:true
                }
                
            });
  </script>
</body>
</html>