/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//Função para modal
function abrir_modal(esteid) {
    //variavel definindo qual id veio do elemento clicado
    id_box = esteid;

    //variavel do elemento de modal que precisa do comportamento
    id_modal = esteid + 'modal';

//abrindo modal
    document.getElementById(id_modal).classList.remove('modal_fechado');
    document.getElementById(id_modal).classList.add('modal_aberto');
}

function fechar_modal() {

//fechando o modal
    document.getElementById(id_modal).classList.remove('modal_aberto');
    document.getElementById(id_modal).classList.add('modal_fechado');

}