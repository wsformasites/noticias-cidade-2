<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
        <link rel="icon" type="image/png" href="assets/images/detalhe-topo.png">
        <link rel="stylesheet" href="assets/css/style.css">
        <base href="http://localhost/noticiascidade/">
    </head>
    <body>
        <header class="header">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                    <img class="navbar-brand" src="assets/images/logo.png" alt="Logotipo do Notícias Cidade">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Barra de navegação">
                        <i class="bi bi-list"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="menu">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" href="home">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="brasil">Brasil</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="internacional">Internacional</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="economia">Economia</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="saude">Saúde</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="ciencia">Ciência</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contato">Contato</a>
                            </li>
                        </ul>
                        <form class="d-flex" method="POST" action="pesquisa">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="O que você procura?" aria-label="O que você procura?" aria-describedby="submit" id="input-search" name="search" required>
                                <button type="submit" class="btn btn-secondary" id="submit">
                                    <i class="bi bi-search" title="Pesquisar"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </nav>
        </header>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    </body>
</html>