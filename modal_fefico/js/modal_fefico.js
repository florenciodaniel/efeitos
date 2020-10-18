/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


	$(document).ready(function(e) {
		$('.btn_modal').click(function(e){
			e.preventDefault();
			var url = $(this).attr('href')
			$('.box-modal-load').load("pagina.html "+url);
			$('#modal').fadeIn(500);	
		});
		
		
		$('#modal, .fechar').click(function(e){
			if( e.target !== this ) 
       			return;
			$('#modal').fadeOut(500);	
		});
		
		
		
    });

