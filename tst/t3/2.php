<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Média Final</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"> <!--link do bootstrap 5.3.3 -->
</head>
<body style="user-select: none !important;" class="bg-info d-flex flex-column align-items-center justify-content-center vh-100"> <!--bg-info(deixa o fundo com cor azul claro) d-flex(deixa responsivo tudo que ta dentro da dfiv, o alig item e justify content só alinha os itens no meio, vh-100 é pora definir quando começa a div de cima para baixo) -->

    <div class="card shadow p-4 text-center"> <!--cria uma div com card(deixa os cantos redondos,), shadow(deixa uma sombra em volta da div) e o p-4(tamanho da div) e text-center(alinha o texto no centro) -->
        <?php
$nota1 = $_POST["nota1"]; /*variavel nota1 do input nota1 do form2.php */
$nota2 = $_POST["nota2"]; /*variavel nota2 do input nota2 do form2.php */
$nota3 = $_POST["nota3"]; /*variavel nota3 do input nota3 do form2.php */
$media = ($nota1 + $nota2 + $nota3) / 3; /*faz a conta da media das 3 variaveis*/

if($media == (int)$media){ /*verifica se a media é um numero inteiro, se for imprime sem casas decimais, se não for imprime com 2 casas decimais */
echo "<h2 class='h4 mb-3 text-primary'>Média Final: " . number_format($media, 0) . "</h2>"; /*imprime a media final usando a variavel media e text-primary deixa a cor do texto azul */
}else{

echo "<h2 class='h4 mb-3 text-primary'>Média Final: " . number_format($media, 2, ',') . "</h2>";  /*imprime a media final, com o number_formart($media, 2, ',') com virgula e apenas 2 casas depois da virgula, não coloquei o '.' pois como pensei que seria uma nota de escola nao teria como tirar acima de 1.000 ou -1.000 */
}

if ($media >= 6) {
echo "<p class='text-success fw-bold'>Aprovado</p>"; /*imprime um paragrafo verde com a fonte bold*/
} else {
echo "<p class='text-danger fw-bold'>Reprovado</p>";  /*imprime um paragrafo vermelho com a fonte bold*/
}
?>
<a href="at2.php" class="btn btn-outline-primary mt-3">Voltar para media</a>
<a href="index.php" class="btn btn-outline-primary mt-3">Voltar</a><!--tag de link com classe de botao do bootsrap com animação, leva de volta ao index.php -->
    </div>
</body>
</html>