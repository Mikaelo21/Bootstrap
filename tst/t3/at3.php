<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Substituir Vogais</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"> <!--link do bootstrap 5 -->
    
</head>
<body style="user-select: none !important;" class="bg-info d-flex flex-column align-items-center justify-content-center vh-100">  <!--bg-info(deixa o fundo com cor azul claro) d-flex(deixa responsivo tudo que ta dentro da dfiv, o alig item e justify content só alinha os itens no meio, vh-100 é pora definir quando começa a div de cima para baixo) -->
    <div class="card shadow p-4"> <!--cria uma div com card(deixa os cantos redondos,), shadow(deixa uma sombra em volta da div) e o p-4(tamanho da div) -->
<h2 class="h4 text-primary mb-4">Substituir Vogais</h2>
<form action="3.php" method="post"> <!--tag de form que envia os dados para o 3.php-->
    <div class="mb-3">
<label class="form-label text-secondary">Digite um texto:</label> <!--label do form com a classe de form label do bootstrap e a cor text-secondary(cinza) -->
<input type="text" name="texto" required class="form-control"> <!--cria um input obrigatorio com a classe de form do bootstrap -->
    </div>
   
     
    <a href="index.php" class="btn btn-outline-danger">Voltar ao inicio</a><!--tag de link com classe de botao do bootsrap com animação, leva de volta ao index.php -->
     <button type="submit" class="btn btn-outline-success">Substituir</button> <!--tag de botao com classe de botao do bootsrap que leva pro 3.php -->
</form>
    </div>
</body>
</html>