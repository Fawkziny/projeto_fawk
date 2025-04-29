<!doctype html>
<html lang="PT-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LootZone - Lista de Produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.html">LootZone</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link active" href="index.html">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="promocao.html">Promoções</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Minha
                            Conta</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="perfil.html">Perfil</a></li>
                            <li><a class="dropdown-item" href="historico.html">Histórico de Compras</a></li>
                            <li><a class="dropdown-item" href="cadastroprodutos.html">Cadastrar Produto</a></li>
                            <li><a class="dropdown-item" href="plista.html">Todos Produtos</a></li>
                            <li><a class="dropdown-item" href="registrov.html">Registro de Vendas</a></li>
                            <li><a class="dropdown-item" href="lvendas.html">Listagem Vendas/Pedidos</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Sair</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="suporte.html">Suporte</a></li>
                    <li class="nav-item"><a class="nav-link" href="faq.html">FAQ</a></li>
                </ul>
                <div class="d-flex">
                    <a href="dashboard.html" class="btn btn-primary me-2">Dashboard</a>
                    <a href="cadastro.html" class="btn btn-primary me-2">Cadastrar</a>
                    <a href="entrar.html" class="btn btn-outline-primary me-3">Entrar</a>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Procurar</button>
                    </form>
                </div>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <h2 class="mb-4">Lista de Produtos</h2>
        <a href="cadastroprodutos.html" class="btn btn-primary mb-3">Adicionar Novo Produto</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Preço</th>
                    <th>Quantidade</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Produto 1</td>
                    <td>Descrição do produto 1</td>
                    <td>R$ 50,00</td>
                    <td>10</td>
                    <td>
                        <a href="#" class="btn btn-warning btn-sm">Editar</a>
                        <a href="#" class="btn btn-danger btn-sm">Excluir</a>
                    </td>
                </tr>
                <tr>
                    <td>Produto 2</td>
                    <td>Descrição do produto 2</td>
                    <td>R$ 100,00</td>
                    <td>5</td>
                    <td>
                        <a href="#" class="btn btn-warning btn-sm">Editar</a>
                        <a href="#" class="btn btn-danger btn-sm">Excluir</a>
                    </td>
                </tr>
                <tr>
                    <td>Produto 3</td>
                    <td>Descrição do produto 3</td>
                    <td>R$ 75,00</td>
                    <td>8</td>
                    <td>
                        <a href="#" class="btn btn-warning btn-sm">Editar</a>
                        <a href="#" class="btn btn-danger btn-sm">Excluir</a>
                    </td>
                </tr>
            </tbody>
        </table>
        <button class="btn btn-secondary" onclick="window.history.back()">Voltar</button>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>