<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>UM MODAL JS</title>
        <link href="estilo.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <section class="section">
            <div class="container">
                <div class="box" id="abrir1" onclick="abrir_modal(this.id)">
                    <div class="box_img">
                        <img src="img/117172247_2824506100988646_5715594947088843159_o.jpg" alt=""/>
                    </div>
                </div>
                <div class="modal_fechado" id="abrir1modal">
                    <div class="modal_img">
                        <img src="img/117172247_2824506100988646_5715594947088843159_o.jpg" alt=""/>
                    </div>
                    <p class="fechar" onclick="fechar_modal()"><span>fechar</span></p>
                </div>
<!--                ------------------------------------------------------------------------->
                 <div class="box" id="abrir2" onclick="abrir_modal(this.id)">
                    <div class="box_img">
                        <img src="img/117170736_2824506560988600_4977568119465844065_o.jpg" alt=""/>
                    </div>
                </div>
                <div class="modal_fechado" id="abrir2modal">
                    <div class="modal_img">
                        <img src="img/117170736_2824506560988600_4977568119465844065_o.jpg" alt=""/>
                    </div>
                    <p class="fechar" onclick="fechar_modal()"><span>fechar</span></p>
                </div>
<!--                ------------------------------------------------------------------------->
                 <div class="box" id="abrir3" onclick="abrir_modal(this.id)">
                    <div class="box_img">
                        <img src="img/117129490_2824506477655275_5526424429785614944_o.jpg" alt=""/>
                    </div>
                </div>
                <div class="modal_fechado" id="abrir3modal">
                    <div class="modal_img">
                        <img src="img/117129490_2824506477655275_5526424429785614944_o.jpg" alt=""/>
                    </div>
                    <p class="fechar" onclick="fechar_modal()"><span>fechar</span></p>
                </div>
<!--                ------------------------------------------------------------------------->
                 <div class="box" id="abrir4" onclick="abrir_modal(this.id)">
                    <div class="box_img">
                        <img src="img/117118545_2824506680988588_339194291527028371_o.jpg" alt=""/>
                    </div>
                </div>
                <div class="modal_fechado" id="abrir4modal">
                    <div class="modal_img">
                        <img src="img/117118545_2824506680988588_339194291527028371_o.jpg" alt=""/>
                    </div>
                    <p class="fechar" onclick="fechar_modal()"><span>fechar</span></p>
                </div>


            </div>
        </section>
        
        
        
        <script src="script.js" type="text/javascript"></script>
    </body>
</html>
