<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curriculum</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script type="text/javascript" src="js/script.js"></script>
</head>

<body>
    <main class="container-fluid">
        <div class="row min-vh-100 justify-content-center align-items-center">
            <div class="card col-md-5 card_background">
                <div class="ms-4 mt-4">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQNY60Z6yYwhAe_vk0XE89TjD03Ovw7EjHK6MJSEKpwLg&s" class="img-fluid rounded-start" alt="..." style="height: 100%;">
                </div>
                <form action="template/exibirCurriculo.php" method="post" class="row">
                    <div class="col-md">
                        <div class="card-body me-4">
                            <label for="nome">Nome:</label>
                            <input type="text" class="form-control" name="nome" id="nome">
                        </div>
                        <div class="card-body me-4">
                            <label for="data">Data de nascimento:</label>
                            <input type="date" class="form-control" name="data" id="data">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card-body">
                                <label for="email">Email:</label>
                                <div class="row">
                                    <div class="col-md-11">
                                        <input type="text" class="form-control" name="email[]" id="email">
                                    </div>
                                    <div class="col-md-1">
                                        <button type="button" class="btn btn-dark rounded-circle" onclick="duplicarCampo('email')"><i class="bi bi-plus-square"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="card-body">
                                <label for="endereco">Endereço:</label>
                                <div class="row">
                                    <div class="col-md-11">
                                        <input type="text" class="form-control" name="endereco[]" id="endereco">
                                    </div>
                                    <div class="col-md-1">
                                        <button type="button" class="btn btn-dark rounded-circle" onclick="duplicarCampo('endereco')"><i class="bi bi-plus-square"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="card-body">
                                <label for="telefone">Telefone:</label>
                                <div class="row">
                                    <div class="col-md-11">
                                        <input type="text" class="form-control" name="telefone[]" id="telefone">
                                    </div>
                                    <div class="col-md-1">
                                        <button type="button" class="btn btn-dark rounded-circle" onclick="duplicarCampo('telefone')"><i class="bi bi-plus-square"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 mb-4">
                            <div class="card-body">
                                <label for="experiencia">Experiência:</label>
                                <div class="row">
                                    <div class="col-md-11">
                                        <input type="text" class="form-control" name="experiencia[]" id="experiencia">
                                    </div>
                                    <div class="col-md-1">
                                        <button type="button" class="btn btn-dark rounded-circle" onclick="duplicarCampo('experiencia')"><i class="bi bi-plus-square"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-dark">Enviar</button>
                </form>
            </div>
        </div>
    </main>
</body>

</html>