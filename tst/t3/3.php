<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Substituir Vogais</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"> <!--link do bootstrap 5 --> 
</head>
<body style="user-select: none !important;" class="bg-info d-flex flex-column align-items-center justify-content-center vh-100"> <!--bg-info(deixa o fundo com cor azul claro) d-flex(deixa responsivo tudo que ta dentro da dfiv, o alig item e justify content só alinha os itens no meio, vh-100 é pora definir quando começa a div de cima para baixo) -->
    <div class="card shadow p-4 text-center"> <!--cria uma div com card(deixa os cantos redondos,), shadow(deixa uma sombra em volta da div) e o p-4(tamanho da div) text-center(alinha o texto no centro) -->
<?php
$texto = $_POST["texto"]; /*variavel texto do input texto do form3.php */

    echo "<h2 class='h4 text-primary mb-3';'>Texto Modificado:</h2>"; 

    for($i = 0; $i < strlen($texto); $i++){
if(strtolower($texto[$i]) == 'a' || strtolower($texto[$i]) == 'e' || strtolower($texto[$i]) == 'i' || strtolower($texto[$i]) == 'o' || strtolower($texto[$i]) == 'u'){ /*verifica se o caractere atual é uma vogal usando strtolower para comparar tanto maiusculas quanto minusculas */
    $texto[$i] = '?';
}
}
    echo "<p class='text-primary'>$texto</p>"; 
?>
<a href="at3.php" class="btn btn-outline-primary mb-3">Voltar as vogais</a> <!--tag de link com classe de botao do bootsrap com animação, leva de volta ao form3.php -->
<a href="index.php" class="btn btn-outline-primary mb-3"> Voltar<!--tag de link com classe de botao do bootsrap com animação, leva de volta ao index.php -->
</a>
    </div>
</body>
</html>