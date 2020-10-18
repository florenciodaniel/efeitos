
<!DOCTYPE html>
<html lang="pt-br">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>one page scroll</title>
      <link rel="stylesheet" href="assets/css/estilo.css">
      <script type="text/javascript" src="assets/js/jquery-3.1.1.min.js"></script>
</head>
<body>
  <section class="noiva"></section>
  <section class="arya"></section>
  <section class="lambor"></section>
  <section class="fredy"></section>

  <nav>
    <div class="mulher">
      <span></span>
      <div>pra casar</div>
    </div>
        <div>
      <span></span>
      <div>personagemr</div>
    </div>
          <div>
      <span></span>
      <div>carro e girl</div>
    </div>
          <div>
      <span></span>
      <div>assustador</div>
    </div>
  </nav>
  <script type="text/javascript">
    let sections = document.querySelectorAll("section");
    let locationsDivs = document.querySelectorAll("nav > div");
    
    window.onscroll = function(){
      for(let i=0; i < sections.length; i++){
        let {bottom, top:t} = sections[i].getBoundingClientRect();
        if(t < window.innerHeight/2 && t > - (window.innerHeight/2)){
          locationsDivs[i].classList.add("mulher");
        }else{
          locationsDivs[i].classList.remove("mulher");
        }
      }
    };
  </script>
</body>
</html>