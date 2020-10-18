/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var slideItem = 0;
var tempo;
window.onload = function(){tempo=
setInterval(passarSlide,4000);
var slide = document.getElementById("slideshow").offsetWidth;
var objs = document.getElementsByClassName("slide");
for(var i=0; i< objs.length; i++){
objs[i].style.width = slide+'px';
}
}

function passarSlide(){
var slide = document.getElementById("slideshow").offsetWidth; //armazena o valor de width na variave slide
//monta uma condiçao para verificar a posicao do indice. se o indice for maior ou igual a ultima posicao, indice recebe zero e volta ao inicio

if( slideItem >=3){

slideItem =0;
} else {

slideItem++;
}
document.getElementById("slideArea").style.marginLeft = "-"+(slide * slideItem)+ "px"; // id nao possui array
//document.getElementsByClassName("slideArea")[0].style.marginLeft = "-"+(slide * slideItem)+"px"; 
}

function avancarSlide(){
var slide = document.getElementById("slideshow").offsetWidth; //armazena o valor de width na variave slide
//monta uma condiçao para verificar a posicao do indice. se o indice for maior ou igual a ultima posicao, indice recebe zero e volta ao inicio

if( slideItem >=3){

slideItem =0;
} else {

slideItem++;
}
document.getElementById("slideArea").style.marginLeft = "-"+(slide * slideItem)+ "px"; // id nao possui array
//document.getElementsByClassName("slideArea")[0].style.marginLeft = "-"+(slide * slideItem)+"px"; 
clearInterval(tempo);

tempo = setInterval(passarSlide, 4000);

}

function voltarSlide(){
var slide = document.getElementById("slideshow").offsetWidth; //armazena o valor de width na variave slide
//monta uma condiçao para verificar a posicao do indice. se o indice for maior ou igual a ultima posicao, indice recebe zero e volta ao inicio

if( slideItem <=0){

slideItem =3;
} else {

slideItem--;
}
document.getElementById("slideArea").style.marginLeft = "-"+(slide * slideItem)+ "px";

clearInterval(tempo);

tempo = setInterval(passarSlide, 4000);
}
