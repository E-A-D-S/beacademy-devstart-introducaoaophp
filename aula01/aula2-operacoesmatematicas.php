<form action="" method="post">
   <input name="numero1" type="text" placeholder="Numero1"> <br/>

    <input name="numero2" type="text" placeholder="Numero2"> <br/>

    <button name="SOMAR">SOMAR </button>
    <button name="SUBTRAIR">SUBTRAIR </button>
    <button name="MULTIPLICAR">MULTIPLICAR </button>
    <button name="DIVIDIR">DIVIDIR </button>
    
</form>

<?php

if (isset($_POST["SOMAR"])) {
 echo $_POST['numero1'] + $_POST['numero2'];
}
 
if (isset($_POST["SUBTRAIR"])) {
    echo $_POST['numero1'] - $_POST['numero2'];
   }
  
if (isset($_POST["MULTIPLICAR"])) {
    echo $_POST['numero1'] * $_POST['numero2'];
   }
    
if (isset($_POST["DIVIDIR"])) {
    echo $_POST['numero1'] / $_POST['numero2'];
   }

?>