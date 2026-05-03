<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Palíndromo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"><!--link do bootstrap 5 -->
    
</head>
<body style="user-select: none !important;" class="bg-info d-flex flex-column align-items-center justify-content-center vh-100"><!--bg-info(deixa o fundo com cor azul claro) d-flex(deixa responsivo tudo que ta dentro da dfiv, o alig item e justify content só alinha os itens no meio, vh-100 é pora definir quando começa a div de cima para baixo) -->
    <div class="card shadow p-4"> <!--cria uma div com card(deixa os cantos redondos,), shadow(deixa uma sombra em volta da div) e o p-4(tamanho da div) -->
   <h2 class="h4 text-primary mb-4">Verificar Palíndromo</h2> <!--h4(tamanho do texto), text-primary(deixa a cor do texto azul) e mb-4 ajusta o tamanho do h2 -->
<form action="5.php" method="post"><!-- -->
      <div class="mb-3">
        <label class="form-label text-secondary">Digite uma palavra:</label> <!--label do form com a classe de form label do bootstrap e a cor text-secondary(cinza) -->
          <input type="text" name="palavra" required pattern="[A-Z a-z ]+" class="form-control"> <!--cria um input obrigatorio com a classe de form do bootstrap, usei o patter pra limitar o input apenas a aceitar palavraz de A-Z e a-z -->
     </div>
     
 <a href="index.php" class="btn btn-outline-danger">Voltar ao inicio</a><!--tag de link com classe de botao do bootsrap com animação, leva de volta ao index.php -->
            <button type="submit" class="btn btn-outline-success">verificar</button><!--tag de botao com classe de botao do bootsrap que leva pro 5.php -->
 </form>
    </div>
</body>
</html