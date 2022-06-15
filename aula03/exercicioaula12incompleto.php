
<form action="" method="post">

    <input name="nome" placeholder="Nome"> <br/>

    <input name="cidade" placeholder="Cidade"> <br/>

    <button> enviar </button>

</form>


<?php

if ($_POST) {
    echo $_POST['nome']." ". $_POST['cidade'];
   
}

?>
        
  