<?php

require __DIR__ . '/../vendor/autoload.php';

function render($view, $data = []) {
    extract($data);
    ob_start();
    require __DIR__ . '/../app/Views/' . $view;
    $content = ob_get_clean();
    require __DIR__ . '/../app/Views/layouts/base.php';
}

function render_sem_login($view, $data = []) {
    extract($data);
    ob_start();$content = ob_get_clean();
    require __DIR__ . '/../app/Views/' . $view;
}

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if ($url == "/"){
    render('home.php', ['title' => 'Pagina Inicial - LootZone ']);
} elseif ($url == "/sobre") {
    render_sem_login('sobre.php', ['title' => 'Sobre - LootZone']);
} elseif ($url == "/entrar") {
    render_sem_login('auth/entrar.php', ['title' => 'Entrar - LootZone']);
} else if ($url == "/dashboard"){
    render('dashboard.php', ['title' => 'Dashboard - LootZone']);
} else if ($url == "/perfil"){
    render('perfil.php', ['title' => 'Perfil - LootZone']);
} else if ($url == "/historico"){
    render('historico.php', ['title' => 'Historico - LootZone']);
} else if ($url == "/cadastroprodutos"){
    render('cadastroprodutos.php', ['title' => 'Historico - LootZone']);
}




else {
    http_response_code(404);
    render('404.php', ['title' => 'Página não encontrada']);
}