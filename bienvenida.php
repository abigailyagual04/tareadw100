<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: login.html');
    exit;
}

echo "Bienvenido, " . htmlspecialchars($_SESSION['username']) . "!";
echo '<br><a href="cerrar_sesion.php">Cerrar sesión</a>';
?>
