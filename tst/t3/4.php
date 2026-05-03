<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Remover Caracteres</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"> <!--link do bootstrap 5 -->
</head>
<body style="user-select: none !important;" class="bg-info d-flex flex-column align-items-center justify-content-center vh-100"> <!--bg-info(deixa o fundo com cor azul claro) d-flex(deixa responsivo tudo que ta dentro da dfiv, o alig item e justify content só alinha os itens no meio, vh-100 é pora definir quando começa a div de cima para baixo) -->

    <div class="card shadow p-4 text-center"> <!--cria uma div com card(deixa os cantos redondos,), shadow(deixa uma sombra em volta da div) e o p-4(tamanho da div) text-center(alinha o texto no centro) -->
<?php
$texto1 = $_POST["texto1"]; /*variavel texto1 do input texto1 do form4.php */
$texto2 = $_POST["texto2"]; /*variavel texto2 do input texto2 do form4.php */
$resultado = $texto1; 

echo "<h2 class='h4 mb-3 text-primary'>Texto Modificado:</h2>";

for($i = 0; $i < strlen($texto1); $i++){
    for($a = 0; $a < strlen($texto2); $a++){ /*verifica cada caractere do texto1 com cada caractere do textO2 */
if($texto1[$i] == $texto2[$a]){ /*verifica se o caractere atual é igual ao texto2, ele remove usando str_replace se for igual e substitui o texto2 por uma string vazia no resultado */
    $resultado = str_replace($texto2[$a], '', $resultado); /*se o caracter da posição i for igual ao caracter do texto 2 ele vai substituir o espaço com o str_replace pra deixar um espaço vazio ' ' */
}
}
}   
echo "<p class='text-secondary'>$resultado</p>";
?>
<a href="at4.php" class="btn btn-outline-primary">Remover novamente</a> <!--tag de link com classe de botao do bootsrap com animação, leva de volta ao form4.php -->
<a href="index.php" class="btn btn-outline-primary mt-3">Voltar ao inicio</a><!--tag de link com classe de botao do bootsrap com animação, leva de volta ao index.php -->
    </div>
</body>
</html>