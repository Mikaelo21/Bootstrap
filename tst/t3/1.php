<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Tabuada</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"><!--link do bootstrap 5 -->
</head>
<body style="user-select: none !important;" class="bg-info d-flex flex-column align-items-center justify-content-center vh-100"> <!--bg-info(deixa o fundo com cor azul claro) d-flex(deixa responsivo tudo que ta dentro da dfiv, o alig item e justify content só alinha os itens no meio, vh-100 é pora definir quando começa a div de cima para baixo) -->

    <div class="card shadow p-4"> <!--cria uma div com card(deixa os cantos redondos,), shadow(deixa uma sombra em volta da div) e o p-4(tamanho da div) -->
<?php
$numero = $_POST["numero"]; /*variavel numero recebe o valor do input numero do form1.php */
    
       
echo "<h2 class='h4 text-primary mb-3'>Tabuada de $numero:</h2>"; /*imprime o numero digitado no form1.php usando a variavel numero, h4 é o tamanho do texto, text-primary deixa a cor do texto azul e mb-3 muda o tamanho do h2 */
for ($i = 0; $i <= 10; $i++) {
echo "<p class='text-secondary mb-1'>$numero x $i = " . ($numero * $i) . "</p>"; /*imprime a tabuada do numero digitadousando a variavel numero e o contador i, text-secondary deixa a cor do texto cinza e mb-1 muda o tamanho do paragrafo */
}
        
?>
        
<a href="at1.php" class="btn btn-outline-primary mt-3">Voltar para tabuada</a><!--tag de link com classe de botao do bootsrap com animação, leva de volta ao 1.php -->
       
<a href="index.php" class="btn btn-outline-primary mt-3">Voltar à página inicial</a><!--tag de link com classe de botao do bootsrap com animação, leva de volta ao index.php -->
</div>

</body>
</html>