<?php
include 'conexion.php';

$user_name = $_POST['username'];
$password = $_POST['password'];
$password = hash('sha512', $password);

$query = "SELECT user_name, password FROM usuarios WHERE user_name = '$user_name' AND password = '$password'";

$ejecutar = mysqli_query($conexion, $query);

if ($ejecutar->num_rows > 0){
    session_start();
    $_SESSION['user_name'] = $user_name;
    echo ' 
    <script>
        window.location = "../pagina_principal.php";
    </script>';
}else{
    echo ' 
    <script>
        alert("Al parecer hubo un error...Intenta de nuevo mas tarde");
        window.location = "../index.php";
    </script>';
}

mysqli_close($conexion);
?>