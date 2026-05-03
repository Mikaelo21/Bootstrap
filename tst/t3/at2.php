<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Média Final</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"> <!--link do bootstrap 5 -->
    
</head>
<body style="user-select: none !important;" class="bg-info d-flex flex-column align-items-center justify-content-center vh-100"> <!--bg-info(deixa o fundo com cor azul claro) d-flex(deixa responsivo tudo que ta dentro da dfiv, o alig item e justify content só alinha os itens no meio, vh-100 é pora definir quando começa a div de cima para baixo) -->
    <div class="card shadow p-4">
        <h2 class="h4 text-primary mb-4">Cálculo da Média Final:</h2>
    <form action="2.php" method="post"> <!--tag de form que envia os dados para o 2.php-->
            <div class="mb-3">
                <label class="form-label text-primary">Nota 1:</label> <!--label do form com a classe de form label do bootstrap e a cor text-primary(azul) -->
                <input type="number" name="nota1" min="0" max="10" step="0.1" required class="form-control "> <!--cria um input obrigatorio com a classe de form do bootstrap, com o min e max para limitar as notas entre 0 e 10, e o step pra liberar casas decimais -->
    </div>
           <div class="mb-3">
                <label class="form-label text-primary">Nota 2:</label> <!--label do form com a classe de form label do bootstrap e a cor text-primary(azul) -->
        <input type="number" name="nota2" min="0" max="10" step="0.1" required class="form-control"> <!--cria um input obrigatorio com a classe de form do bootstrap, com o min e max para limitar as notas entre 0 e 10, e o step pra liberar casas decimais -->
    </div>
    <div class="mb-3">
        <label class="form-label text-primary">Nota 3:</label> <!--label do form com a classe de form label do bootstrap e a cor text-primary(azul) -->
        <input type="number" name="nota3" min="0" max="10" step="0.1" required class="form-control"> <!--cria um input obrigatorio com a classe de form do bootstrap, com o min e max para limitar as notas entre 0 e 10, e o step pra liberar casas decimais -->
            </div>
            
            <a href="index.php" class="btn btn-outline-danger">Voltar ao inicio</a><!--tag de link com classe de botao do bootsrap com animação, leva de volta ao index.php -->
            <button type="submit" class="btn btn-outline-success">Calcular</button> <!--tag de botao com classe de botao do bootsrap que leva pro 2.php -->
    </form>
    </div>
</body>
</html>