<?php

$c1 = [
 "nome" => "Akon", 
  "email" => "akon@gmail.com",
   "telefone" => "51998962893",

];

$c2 = [
    "nome" => "eminem", 
     "email" => "eminem@gmail.com",
      "telefone" => "51997732381",
      
];


$cantores = [
    $c1,
    $c2

];

?>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    
<div class="container">
        <h1 class="mt-5"> Cantores </h1>
        <hr>
        <table class="table table-hover table-striped mt-5">
         <thead class="table-dark">
             <tr>
                  <th>Nome</th>
                  <th>Email</th>
                  <th>Telefone</th>
</tr>
     </thead>
     <tbody>
     <?php
foreach ($cantores as $cadacantor){
        echo "<tr>";
        echo "<td>" . $cadacantor["nome"] . "</td>";
        echo "<td>" . $cadacantor["email"] . "</td>";
        echo "<td>" . $cadacantor["telefone"] . "</td>";
    echo "<tr>";
}

?>

</tbody>
</table>
</div>




