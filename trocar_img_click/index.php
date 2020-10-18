
<!DOCTYPE html>
<html lang="pt-br">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Typewriter Effect</title>
      <link rel="stylesheet" href="css/estilo.css">
      
</head>
<body>
   <div class="imagem">
      <img id="agni" onclick="trocar()" alt="hindu" class="img-gods expand" src="img/tr01.jpg" alt=""/>
   </div>
   
   
   <script>
         



var currentImgIndex=1;
var ImgSrcArray = [ //caminho das suas imgs aqui
'img/tr01.jpg',
'img/tr02.jpg',
'img/tr03.jpg',
'img/tr04.jpg',
'img/tr05.jpg',
'img/tr06.jpg'

];

function trocar(){

  if(currentImgIndex == ImgSrcArray.length) //reseta quando o contatador for igual ao tamanho da array e volta a 1° img
  {
    currentImgIndex=0;
  }
  document.getElementById("agni").src=ImgSrcArray[currentImgIndex]; //altera a img do elemento "agni" de acordo com o indice
    currentImgIndex++; // incrementa a nossa referencia

}

      </script>
</body>
</html>