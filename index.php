<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servidor DAW - Práctica 1</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

<div class="container">
    <?php
    echo "<h1>Servidor DAW</h1>";
    echo "<p>Jose Carlos Zapata Losada – Pr&aacute;ctica 1 DAW</p>";
    echo "<p><strong>Fecha:</strong> " . date("d/m/Y H:i:s") . "</p>";
    echo "<p><strong>PHP:</strong> " . PHP_VERSION . "</p>";
    echo "<p><strong>Servidor:</strong> " . $_SERVER['SERVER_NAME'] . "</p>";
    echo "<p><strong>IP cliente:</strong> " . $_SERVER['REMOTE_ADDR'] . "</p>";
    echo "<p><strong>Protocolo:</strong> " . ((!empty($_SERVER['HTTPS'])) ? "HTTPS" : "HTTP") . "</p>";
    ?>
</div>

</body>
</html>