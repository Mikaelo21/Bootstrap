<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Palíndromo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body style="user-select: none !important;" class="bg-info d-flex flex-column align-items-center justify-content-center vh-100"> <!--bg-info(deixa o fundo com cor azul claro) d-flex(deixa responsivo tudo que ta dentro da dfiv, o alig item e justify content só alinha os itens no meio, vh-100 é pora definir quando começa a div de cima para baixo) -->
    <div class="card shadow p-4"> <!--cria uma div com card(deixa os cantos redondos,), shadow(deixa uma sombra em volta da div) e o p-4(tamanho da div) -->
<?php
$palavra = $_POST["palavra"]; /*variavel palavra do input palavra do form5.php */
$invertida1 = strrev($palavra); /*variavel invertida*/
$palavra1 = strtolower($palavra); /*a variavel palavra1 ganha o valor da variavel palavra com os caracteres diminuidos*/
$invertida = strrev($palavra1); /*a variaveel invertida recebe o valor da variavel palavra1 invertida*/

    if($palavra1 == $invertida){ 
echo "<p class='text-xl font-semibold text-success'>Resultado: \"$palavra\" é um palíndromo<br></p>";
 
}else{
echo "<p class='text-xl font-semibold text-danger'>Resultado: \"$palavra\" não é um palíndromo<br></p>";

}
    echo "<p class='text-primary'>palavra original: $palavra</p>";
    echo "<p class='text-primary'>palavra invertida: $invertida1</p>";
?>
<a href="at5.php" class="btn btn-outline-primary mt-1">Voltar para o palindromo</a> <!--tag de link com classe de botao do bootsrap com animação, leva de volta ao form5.php -->
       
<a href="index.php" class="btn btn-outline-primary mt-2">Voltar à página inicial</a><!--tag de link com classe de botao do bootsrap com animação, leva de volta ao index.php -->
    </div>
</body>
</html>
