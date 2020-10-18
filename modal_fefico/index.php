
<!DOCTYPE html>
<html lang="pt-br">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Modal fefico</title>
<!--      <link rel="stylesheet" href="css/estilo.css">-->
<script type="text/javascript" src="js/jquery-1.9.1.js" ></script>
<script type="text/javascript">
	$(document).ready(function(e) {
		$('.btn_modal').click(function(e){
			e.preventDefault();
			var url = $(this).attr('href')
			$('.box-modal-load').load(url);
			$('#modal').fadeIn(500);	
		});
		
		
		$('#modal, .fechar').click(function(e){
			if( e.target !== this ) 
       			return;
			$('#modal').fadeOut(500);	
		});
		
		
		
    });
</script>
<style rel="stylesheet" type="text/css">
	#modal{ background-color: rgba(0, 0, 0, 0.6); position:fixed; top:0; left:0; width:100%; height:100%; display:none; }
	.box-modal{ background:#FFF;position:absolute;top:50%;left:50%;width:30%;height:200px;margin-left:-15%;margin-top:-100px;text-align:center;}
	.fechar{ color:#CCC; cursor:pointer; border:1px solid #CCC; border-radius:7px; padding:5px 10px;  position:absolute;  top:2px; right:2px;}
	
</style>
</head>
<body>
	<p>Minha vida</p>
    <a href="#pagina1" class="btn_modal">Pagina 1</a>
    <a href="#pagina2" class="btn_modal">Pagina 2</a>
    <a href="#pagina3" class="btn_modal">Pagina 3</a>

    <div id="modal">
        <div class="box-modal">
          <div class="box-modal-load">
            <img id="foto1" src="img/gatinho.jpg">
            <img id="foto2" src="img/gostosa.jpg">
          </div> 	
            <div class="fechar">X</div>
        </div> 
	</div>


  
</body>
</html>