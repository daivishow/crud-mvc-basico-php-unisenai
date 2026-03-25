<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Fábrica de Carros</title>

    <!-- Bootstrap 4.6 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!-- JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="bg-light">

<div class="container mt-4">

    <div class="jumbotron text-center bg-primary text-white">
        <h1>Fábrica de Carros</h1>
        <p>Sistema MVC com PHP + MySQL</p>
    </div>

    <?php include __DIR__ . '/menu.php'; ?>

    <?php if (!empty($dados['mensagem'])): ?>
        <div class="alert alert-info">
            <?= $dados['mensagem'] ?>
        </div>
    <?php endif; ?>

    <div class="card p-4 shadow-sm">
        <?php include __DIR__ . '/' . $view; ?>
    </div>

</div>

</body>
</html>