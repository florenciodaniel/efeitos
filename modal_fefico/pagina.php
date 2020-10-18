<?php
	$url = $_POST['url'];
	switch ($url) {
	case "home": ?>
    	<h1>Teste</h1>
    <?php	
		break;
    case "pagina1":
        echo "Página 1";
        break;
    case "pagina2":
        echo "Página 2";
        break;
    case "pagina3":
        echo "Página 3";
        break;
	default:
       	echo "Nada encontrado";
}
?>

