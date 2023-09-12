<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produto</title>
    <!-- Inclua os arquivos CSS e JS do Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Cadastro de Produto</h1>
        <!--Action pra passar caminho da pasta movimento-->
        <form action="movimento/movimento_produto.php" method="post">
            <div class="mb-3">
                <label for="nome" class="form-label">Nome do Produto</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome do produto">
            </div>
            <div class="mb-3">
                <label for="preco" class="form-label">Valor do Produto</label>
                <input type="text" class="form-control" id="valor" name="valor" placeholder="Digite o preço do produto">
            </div>
            <div class="mb-3">
                <label for="estoque" class="form-label">Quantidade</label>
                <input type="number" class="form-control" id="quantidade" name="quantidade" placeholder="Digite a quantidade em estoque">
            </div>
            <div class="mb-3">
                <label for="descricao" class="form-label">Obs:</label>
                <textarea class="form-control" id="obs" name="obs" rows="3" placeholder="Digite a descrição do produto"></textarea>
            </div>
            
            
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>

    <!-- Inclua o arquivo JS do Bootstrap (opcional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>