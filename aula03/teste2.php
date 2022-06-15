<form action="" method="POST">
<input type="text" name="nome" placeholder="Nome...">
    <input type="text" name="idade" placeholder="Idade...">
    <button>Enviar Dados</button>

</form>

     <?php
        if ($_POST) {
    echo $_POST['nome'] ." ".$_POST['idade'];
        }

        ?>
