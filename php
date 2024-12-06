<?php
$nome = "Maria Eduarda Pereira";
$idade = 35;
$animais_de_estimacao = array("Juá", "Oriosvaldo");

function subtrair($a, $b) {
$resultado = $a - $b;
return $resultado;
}
?>
<html>
<head>
<title>Página do <?= $nome ?></title>
</head>

<body>
<h1>Página pessoal do <?= $nome ?></h1>
<p>Oi eu sou o <?= $nome ?>, tenho <?= $idade ?> anos e essa é minha lista de animais:</p>
<ul>
<?php foreach($animais_de_estimacao as $animal) { ?>
<li><?= $animal ?></li>
<?php } ?>
</ul>
<p>Obrigado por me visitar hoje, dia: <?= date("d/m/Y") ?></p>
<p>Caso tenha curiosidade, 1 - 1 = <?= subtrair(1, 1) ?></p>
</body>
</html>
