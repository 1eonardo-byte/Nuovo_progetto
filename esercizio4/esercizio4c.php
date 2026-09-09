<?php
function saluta($nome){
    return 'Ciao ' . $nome . ", come stai?";
}


    if (isset($_POST['nome'])){
        $nome_dato = $_POST['nome'];
        echo saluta($nome_dato);
    }
?>
<form action="" method="POST">
    <input type="text" name="nome" placeholder="Scrivi il tuo nome" required>
    <button type="submit">Invia</button>
</form>