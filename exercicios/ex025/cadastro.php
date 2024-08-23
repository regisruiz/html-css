<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
<?php 
$nome = $_GET['cnome'];
$sobrenome = $_GET['csobrenome'];
print "Nome: <strong>$nome</strong><br/>";
print "Sobrenome: <strong>$sobrenome</strong>";
?>
</body>
</html>

