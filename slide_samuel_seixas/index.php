
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
  Boa noite Dev´s.

Gostaria de colaborar de alguma forma com o curso.

Consegui terminar a implementação de SlideShow (sem plugin) apenas com html, css e javaScript.

Deixarei o codigo aqui para ajudar aos que estao começando como eu.

Agradeço Ao Alessandro Kobs e ao Guga Alves pela ajuda.

Segue os dados:

functions.php************************************

add_action("init","create_post_type"); // inicia o post-type

Setup.php***********************************

function create_post_type(){

register_post_type('banners',

array(

'labels'=> array(

'name'=> __('banners'),

'singular_name' =>__('banners')

),

// supports habilita os itens que apareceram em nosso painel admin..

'supports' => array(

'title', 'editor', 'thumbnail'

),

'public' => true,

'has_archive'=> true,

'menu_icon' => 'dashicons-images-alt2',

'rewrite' => array('slug'=>'banners'),

));

}

index.php-----------------------------

<!--SlideShow-->

<div id="slideArea">

<?php

$banners = array(

'post_type' =>'banners',

'posts_per_page' =>4,

);

$banner_query = new WP_Query($banners);

?>

<?php if ($banner_query->have_posts()): while($banner_query -> have_posts()): $banner_query -> the_post(); ?>

<!--Slide 1-->

<div class="slide">

<?php the_post_thumbnail('post-thumbnail');?>

<div id="slideInfo">

<div id="slideInfoTitulo">

<?php the_title(); ?>

</div>

</div>

</div>

<!--fimSlide-->

<?php endwhile; endif; ?>

<?php wp_reset_query(); ?>

</div>

<!--FimSlideShow-->

js-------------------------------

var slideItem = 0;

var tempo;

window.onload = function(){ if (document.getElementById('slideshow') !== null){

tempo = setInterval(passarSlide,4000);

var slide = document.getElementById("slideshow").offsetWidth;

var objs = document.getElementsByClassName("slide");

for(var i=0; i< objs.length; i++){

objs[i].style.width = slide+'px';

}

}

document.querySelector(".menuMobile").addEventListener("click", function() {

if (document.querySelector(".menu1 nav ul").style.display == 'flex') {

document.querySelector(".menu1 nav ul").style.display = "none";

} else {

document.querySelector(".menu1 nav ul").style.display = "flex";

}

});

}

function passarSlide(){

var slide = document.getElementById("slideshow").offsetWidth; //armazena o valor de width na variave slide

//monta uma condiçao para verificar a posicao do indice. se o indice for maior ou igual a ultima posicao, indice recebe zero e volta ao inicio

if( slideItem >=3){

slideItem =0;

} else {

slideItem++;

}

document.getElementById("slideArea").style.marginLeft = "-"+(slide * slideItem)+ "px"; // id nao possui array

//document.getElementsByClassName("slideArea")[0].style.marginLeft = "-"+(slide * slideItem)+"px";

}

function avancarSlide(){

var slide = document.getElementById("slideshow").offsetWidth; //armazena o valor de width na variave slide

//monta uma condiçao para verificar a posicao do indice. se o indice for maior ou igual a ultima posicao, indice recebe zero e volta ao inicio

if( slideItem >=3){

slideItem =0;

} else {

slideItem++;

}

document.getElementById("slideArea").style.marginLeft = "-"+(slide * slideItem)+ "px"; // id nao possui array

//document.getElementsByClassName("slideArea")[0].style.marginLeft = "-"+(slide * slideItem)+"px";

clearInterval(tempo);

tempo = setInterval(passarSlide, 4000);

}

function voltarSlide(){

var slide = document.getElementById("slideshow").offsetWidth; //armazena o valor de width na variave slide

//monta uma condiçao para verificar a posicao do indice. se o indice for maior ou igual a ultima posicao, indice recebe zero e volta ao inicio

if( slideItem <=0){

slideItem =3;

} else {

slideItem--;

}

document.getElementById("slideArea").style.marginLeft = "-"+(slide * slideItem)+ "px";

clearInterval(tempo);

tempo = setInterval(passarSlide, 4000);

}

Deus Abençoe a Todos!!!
</body>
</html>