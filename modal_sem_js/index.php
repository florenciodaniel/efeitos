
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modal sem javascript</title>
    <!--      <link rel="stylesheet" href="css/estilo.css">-->
    <style>
      body{
        margin: 0;
        padding: 0;
        background-color: #969494;
        width: 100%;
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: center;
        align-content: center;
        align-items: center;
      }
      .modal-img img{
        width: 220px;
        height: 220px;
        margin: 15px 15px;
        border: 1px solid #424141;
        padding: 4px;  
        border-radius: 4px;
        box-shadow: 0px 0px 10px #1865e0;
        cursor: pointer;
        object-fit: cover;
      }
      .modal{
        display:none;
        width:98%;
        height:98vh;
        position:fixed;
        top: 0;
        left: 0;
        margin: 0 auto;
        background-color:rgba(0,0,0,0);
        z-index:9100;
      }
      .modal img{
        max-width: 98%;
        max-height: 98%;
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%); 
        border: 5px solid white;
      }
      .modal:target{
        display: block;
        pointer-events: auto;
      }
      .fechar{  
        padding: 5px 5px;
        border: 1px solid black;
        position: absolute;
        right: 6px;
        top: 6px;
        border-radius: 7px;
        cursor: pointer;
        color: white;
        background-color: blue;
        z-index: 9200;
      }
      .fechar:hover{  
        color: white;
        background-color: red;
      }
    </style>
  </head>
  <body>
    <div class="modal-img">
      <a href="#img1"><img src="img1.jpg"></a>
    </div>
    <div id="img1" class="modal">
      <a href="#fechar" class="fechar">fechar</a>
      <img src="img1.jpg">
    </div>
    
       <div class="modal-img">
      <a href="#img2"><img src="img2.jpg"></a>
    </div>
    <div id="img2" class="modal">
      <a href="#fechar" class="fechar">fechar</a>
      <img src="img2.jpg">
    </div>
    
       <div class="modal-img">
      <a href="#img3"><img src="img3.jpg"></a>
    </div>
    <div id="img3" class="modal">
      <a href="#fechar" class="fechar">fechar</a>
      <img src="img3.jpg">
    </div>




  </body>
</html>