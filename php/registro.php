<?php
include 'conexion.php';

$email = $_POST['email'];
$user_name = $_POST['user_name'];
$password = $_POST['password'];
$password = hash('sha512',$password);

$query = "INSERT INTO usuarios(email, user_name, password) VALUES('$email', '$user_name', '$password')";


//compruebo si no hay datos repetidos
$verif_email = mysqli_query($conexion, "SELECT * FROM usuarios WHERE email = '$email'");
$verif_username = mysqli_query($conexion, "SELECT * FROM usuarios WHERE user_name = '$user_name'");

if (mysqli_num_rows($verif_email) > 0) {
    echo '<script>
    alert("Este correo ya existe, intenta con otro");
    window.location = "../index.php";
    </script>';
    mysqli_close($conexion);
    exit();
}
if (mysqli_num_rows($verif_username) > 0) {
    echo '<script>
    alert("Este usuario ya existe, intenta con otro");
    window.location = "../index.php";
    </script>';
    mysqli_close($conexion);
    exit();
}

//ejecuto el registro right here ;)
$ejecutar = mysqli_query($conexion, $query);

if ($ejecutar){
    echo ' 
    <script>
        alert("Usuario almacenado");
        window.location = "../pagina_principal.php";
    </script>';
}else{
    echo ' 
    <script>
        alert("Al parecer hubo un error... <p>Intenta de nuevo mas tarde</p>");
        window.location = "../index.php";
    </script>';
}

mysqli_close($conexion);
?>