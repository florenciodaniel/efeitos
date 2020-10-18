
<!DOCTYPE html>
<html lang="pt-br">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Eventos de click somente com CSS</title>
      <link rel="stylesheet" href="css/estilo.css">
      
</head>
<body>
  <h1>Clicks de eventos com CSS</h1>
  <main>
    <h2>Acordeon com :target</h2>
    <div class="acordeon">
      <a href="#bosta-1">titulo 1</a>
      <p id="bosta-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce quis eros sed quam imperdiet aliquam non quis nibh. Vestibulum finibus leo dui, non efficitur tortor convallis vel. Integer aliquet dolor sit amet nisl molestie sollicitudin.</p>
      <a href="#bosta-2">titulo 1</a>
      <p id="bosta-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce quis eros sed quam imperdiet aliquam non quis nibh. Vestibulum finibus leo dui, non efficitur tortor convallis vel. Integer aliquet dolor sit amet nisl molestie sollicitudin.</p>
      <a href="#bosta-3">titulo 1</a>
      <p id="bosta-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce quis eros sed quam imperdiet aliquam non quis nibh. Vestibulum finibus leo dui, non efficitur tortor convallis vel. Integer aliquet dolor sit amet nisl molestie sollicitudin.</p>
      <a href="#bosta-4">titulo 1</a>
      <p id="bosta-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce quis eros sed quam imperdiet aliquam non quis nibh. Vestibulum finibus leo dui, non efficitur tortor convallis vel. Integer aliquet dolor sit amet nisl molestie sollicitudin.</p>
    </div>
  </main>
  <h2>ventana modal com :checked</h2>
  <input type="radio" name="modal" id="abrir-modal">
  <label for="abrir-modal" class="label-abrir">abrir modal</label>
  
  <div id="modal">
    <p id="bosta-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce quis eros sed quam imperdiet aliquam non quis nibh. Vestibulum finibus leo dui, non efficitur tortor convallis vel. Integer aliquet dolor sit amet nisl molestie sollicitudin.</p>
    <input type="radio" name="modal" id="fechar-modal">
  <label for="fechar-modal" class="label-fechar">fechar modal</label>
  </div>
  <h2>menu com :checked</h2>
  <nav id="menu">
    <input type="checkbox" id="mostrar-menu">
  <label for="mostrar-menu" class="abrir-menu">Menu</label>
  <ul>
    <li><a href="#">home</a></li>
    <li><a href="#">sobre</a></li>
    <li><a href="#">contato</a></li>
    <li><a href="#">galeria</a></li>
  </ul>
  </nav>
</body>
</html>