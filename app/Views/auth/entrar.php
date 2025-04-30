<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login - LootZone</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/styles.css">
</head>

<body class="bg-light">
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">LootZone</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Início</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/promocao">Promoções</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Minha Conta
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/perfil">Perfil</a></li>
              <li><a class="dropdown-item" href="/historico">Histórico de Compras</a></li>
              <li><a class="dropdown-item" href="/cadastroprodutos">Cadastrar Produto</a></li>
              <li><a class="dropdown-item" href="/plista">Todos Produtos</a></li>
              <li><a class="dropdown-item" href="/registrov">Registro de Vendas</a></li>
              <li><a class="dropdown-item" href="/lvendas">Listagem Vendas/Pedidos</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Sair</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/sobre">Suporte</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/faq">FAQ</a>
          </li>
        </ul>

        <div class="d-flex">
          <a href="/dashboard" class="btn btn-primary me-2">Dashboard</a>
          <a href="/registrar" class="btn btn-primary me-2">Cadastrar</a>
          <a href="/entrar" class="btn btn-outline-primary me-3">Entrar</a>

          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Procurar</button>
          </form>
        </div>
      </div>
    </div>
  </nav>

  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card shadow">
          <div class="card-header text-center bg-primary text-white">
            <h3>Entrar na Sua Conta</h3>
          </div>
          <div class="card-body">
            <form action="login_action.php" method="POST">
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
              </div>
              <div class="mb-3">
                <label for="senha" class="form-label">Senha</label>
                <input type="password" class="form-control" id="senha" name="senha" required>
              </div>
              <div class="d-grid">
                <button type="submit" class="btn btn-primary">Entrar</button>
                <a href="/dashboard" class="btn btn-secondary mt-2">Entrar como Visitante</a>
              </div>
            </form>
            <div class="text-center mt-3">
              <a href="esqueci_senha.html">Esqueci minha senha</a>
            </div>
          </div>
        </div>
        <div class="text-center mt-3">
          <a href="/registrar">Ainda não tem uma conta? Cadastre-se.</a>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>