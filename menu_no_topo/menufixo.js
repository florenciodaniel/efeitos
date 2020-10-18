/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(function(){
    if($(window).scrollTop()>$('.foto2').offset().top){
         $('.topoContainer').addClass('topoContainer_fixo'); 
      }else{
         $('.topoContainer').removeClass('topoContainer_fixo'); 
      }  
    $(window).scroll(function(){
      if($(this).scrollTop()>$('.foto2').offset().top){
         $('.topoContainer').addClass('topoContainer_fixo'); 
      }else{
         $('.topoContainer').removeClass('topoContainer_fixo'); 
      }  
    });
 
});
