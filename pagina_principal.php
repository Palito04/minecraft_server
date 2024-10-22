<?php
if (($_SESSION['user_name'])){
    echo ' 
    <script>
        alert("Al parecer hubo un error...Intenta de nuevo mas tarde");
        window.location = "index.php";
    </script>';
    session_destroy();
    die();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página principal</title>
    <link rel="stylesheet" href="assets/styles/styles.css">
    <link rel="stylesheet" href="assets/styles/styles_pp.css">
</head>
<body>
    <header>
        <h2 class="logo">MS</h2>
        <nav class="navigation">
            <a href="#">Inicio</a>
            <a href="#">Nosotros</a>
            <span class="btnlogin-popup" ><ion-icon class="icon" name="person-circle-outline"></ion-icon></span>
        </nav>
    </header>

    <?php
    echo $_SESSION['user_name'];
    ?>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>