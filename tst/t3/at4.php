<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Remover Caracteres</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"> <!--link do boostrap 5 -->>
</head>
<body style="user-select: none !important;" class="bg-info d-flex flex-column align-items-center justify-content-center vh-100"> <!--bg-info(deixa o fundo com cor azul claro) d-flex(deixa responsivo tudo que ta dentro da dfiv, o alig item e justify content só alinha os itens no meio, vh-100 é pora definir quando começa a div de cima para baixo) -->
    <div class="card shadow p-4"> <!--cria uma div com card(deixa os cantos redondos,), shadow(deixa uma sombra em volta da div) e o p-4(tamanho da div) -->
        <h2 class="h4 text-primary mb-4">Remover Caracter</h2>
        <form action="4.php" method="post"> <!--tag de form que envia os dados para o 4.php-->
            <div class="mb-3">
         <label class="form-label text-primary">texto original:</label> <!--label do form com a classe de form label do bootstrap e a cor text-primary(azul) -->
                <input type="text" name="texto1" required class="form-control"> <!--cria um input obrigatorio com a classe de form do bootstrap -->
     </div>
    <div class="mb-3">
  <label class="form-label text-primary">caracter a remover:</label> <!--label do form com a classe de form label do bootstrap e a cor text-primary(azul) -->
        <input type="text" name="texto2" required class="form-control"> <!--cria um input obrigatorio com a classe de form do bootstrap, com o minlength e maxlength para limitar a apenas 1 caracter, não consegui fazer a parte logica funcionar com mais de um caracter então limitei aqui -->
    </div>
<a href="index.php" class="btn btn-outline-danger">Voltar ao inicio</a><!--tag de link com classe de botao do bootsrap com animação, leva de volta ao index.php -->

<button type="submit" class="btn btn-outline-success">Remover</button> <!--tag de botao com classe de botao do bootsrap que leva pro 4.php -->
        </form>
    </div>
</body>
</html>