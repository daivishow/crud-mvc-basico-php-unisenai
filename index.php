<?php
require_once 'models/Fabrica.php';
require_once 'controllers/FabricaController.php';

$fabrica = new Fabrica();
$controller = new FabricaController($fabrica);

$acao = $_GET['acao'] ?? 'index';

switch ($acao) {

    case 'listar':
        $resultado = $controller->listar();
        break;

    case 'form_fabricar':
        $resultado = ['view' => 'fabricar.php', 'dados' => []];
        break;

    case 'fabricar':
        $resultado = $controller->fabricar($_POST['modelo'], $_POST['cor']);
        break;

    case 'vender':
        $resultado = $controller->vender($_GET['id']);
        break;

    case 'deletar':
        $resultado = $controller->deletar($_GET['id']);
        break;

    default:
        $resultado = ['view' => 'home.php', 'dados' => []];
}

$view = $resultado['view'];
$dados = $resultado['dados'];

include 'view/layout.php';