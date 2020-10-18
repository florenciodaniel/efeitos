/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(function () {
$(document).ready(function(){
  $(window).bind('scroll', function(){
    var navHeight = $(window).height()-70;
    if($(window).scrollTop()>navHeight){
      $('nav').addClass('fixed');
    }else{
      $('nav').removeClass('fixed');
    }
  });
});
});
