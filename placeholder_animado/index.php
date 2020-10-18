
<!DOCTYPE html>
<html lang="pt-br">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Placeholder Animado</title>
      <link rel="stylesheet" href="css/estilo.css">
      <script src="js/superplaceholder.min.js" type="text/javascript"></script>
</head>
<body>
  <h2>placehodel animado</h2>
  <div class="label">
     <label>Enter a URL:</label><br>
     <div class="inpu">
       <input id="inp3" type="text" value="" placeholder="Url">
     </div>
     
  </div>
  
                        
  <div class="inpu">
    <input id="inp1" type="text" value="" placeholder="Email">
  </div>                      

  <div class="inpu">
    <input id="inp2" type="password" value="" placeholder="Password">
  </div>


<script>
						superplaceholder({
							el: inp1,
							sentences: ['Only company emails', 'kushagra@wingify.com', 'adam@google.com'],
							options: {
								loop: true
							}
						})

						superplaceholder({
							el: inp2,
							sentences: ['1 special character', '1 uppercase alphabet', 'Eg. hjhhjAsasd*'],
							options: {
								loop: true,
								letterDelay: 30
							}
						})

						superplaceholder({
							el: inp3,
							sentences: ['Any format works', 'http://yahoo.com', 'www.facebook.com', 'airbnb.com'],
							options: {
								letterDelay: 80,
								loop: true,
								startOnFocus: false
							}
						});
					</script>

</body>
</html>