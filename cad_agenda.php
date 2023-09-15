<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Barco</title>
    <!-- Inclua os arquivos CSS e JS do Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.5.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Agendar</h1>
        <form action="movimento/movimento_agenda.php" method="POST">

            <div class="mb-3">
                <label for="nome" class="form-label">Nome Fantasia</label>
                <input type="text" class="form-control" id="nome" name="nome_fantasia" placeholder="Digite o nome da empresa" required>
            </div>
            <div class="mb-3">
                <label for="nome" class="form-label">Data</label>
                <input type="date" class="form-control" id="nome" name="dt" placeholder="Digite a data" required>
            </div>
            <div class="mb-3">
                <label for="marca" class="form-label">Horario</label>
                <input type="time" class="form-control" id="proprietario" name="horario" placeholder="Digite o horario" required>
            </div>
            <div class="mb-3">
                <label for="comprimento" class="form-label">Tempo</label>
                <input type="text" class="form-control" id="comprimento" name="tempo" placeholder="Digite o tempo" required>
            </div>
            <div class="mb-3">
                <label for="nome" class="form-label">Barco</label>
                <input type="text" class="form-control" id="nome" name="barco" placeholder="Escolha o barco" required>
            </div>
            <button type="submit" class="btn btn-primary">Agendar</button>
        </form>
    </div>

    <!-- Inclua o arquivo JS do Bootstrap 5 (opcional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.2/dist/js/bootstrap.min.js"></script>
</body>
</html>