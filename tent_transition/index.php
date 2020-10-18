
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
    <div class="container">
        <div class="box1" onclick="mostrar()">
            <p>gggg</p>
        </div>
        <div class="inativo" id="thebox1">
        fdfgdjghdjfdujdutdududutdu
    </div>
    </div>
    
    
    <script>
         //mostrar ou esconder os links do menu
                        function mostrar() {

                            let div = document.getElementById('thebox1');
                            if (div.classList.contains('inativo') === true) {
                                div.classList.remove('inativo');
                                div.classList.add('ativo');
                            } else if (div.classList.contains('ativo') === true) {
                                div.classList.remove('ativo');
                                div.classList.add('inativo');
                            }

                        }
    </script>
</body>
</html>