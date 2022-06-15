<?php

$prod1 = [
 "nome" => "calça", 
  "preço" => 49.99,
   "descrição" => "calça jeans azul",
    "imagem" => '<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQOQBf0fFMA7BiqawrPe9CY_kKbAGwSzBMzRYmXwnTQ&s" alt="">',
];

$prod2 = [
    "nome" => "boné", 
    "preço" => 29.99,
     "descrição" => "boné aba normal verde",
      "imagem" => '<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcREeqozMF6D0NshnsW_ZO_RXHsljaW_4NcpLj1bEbKqpA&s" alt="">',
      
];

$prod3 = [
    "nome" => "bermuda", 
  "preço" => 25.99,
   "descrição" => "bermuda vermelha",
    "imagem" => '<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTH4SK-p2ObEexyw-Fucwjpgf5oSDybsGm90janKQt4fg&s" alt="">',
      
];


$prod4 = [
    "nome" => "camiseta", 
    "preço" => 49.99,
     "descrição" => "camiseta azul",
     'imagem'=>'<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcROcDeVh1vLu0tTTcwU4gFhYIpk-ynEQMQBw3t1Tor8eg&s" alt="">',
      
];


$prod5 = [
"nome" => "camisa social", 
  "preço" => 99.99,
   "descrição" => "camisa social laranja",
    "imagem" =>'<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS0JkbAcODhz2F7KGBLv73K4c5_xTjhNRdEKUHmXTqFvA&s" alt="">',
      
];


$produtos = [
    $prod1,
    $prod2,
    $prod3,
    $prod4,
    $prod5,

];

?>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    
<div class="container">
        <h1 class="mt-5"> Produtos </h1>
        <hr>
        <table class="table table-hover table-striped mt-5">
         <thead class="table-dark">
             <tr>
                  <th>Nome</th>
                  <th>Preço</th>
                  <th>Descrição</th>
                  <th>Imagem</th>
</tr>
     </thead>
     <tbody>
     <?php
foreach ($produtos as $cadaproduto){
        echo "<tr>";
        echo "<td>" . $cadaproduto["nome"] . "</td>";
        echo "<td>" . $cadaproduto["preço"] . "</td>";
        echo "<td>" . $cadaproduto["descrição"] . "</td>";
        echo "<td>" . $cadaproduto["imagem"] . "</td>";
        
    echo "<tr>";
}

?>

</tbody>
</table>
</div>



