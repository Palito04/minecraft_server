<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login-Registro</title>
    <link rel="stylesheet" href="assets/styles/styles.css">
</head>
<body>
    <header>
        <h2 class="logo">SANSUNG</h2>
    </header>
    <div class="wrapper">

        <div class="form-box login">
            <h2>Login</h2>
            
            <form action="php/login.php" method="post">

                <div class="input-box">
                    <span class="icon"><ion-icon name="mail-outline"></ion-icon></span>
                    <input type="text" name="user_name" required>
                    <label>Usuario</label>
                </div>

                <div class="input-box"> 
                    <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
                    <input type="password" name="password" required>
                    <label>Contraseña</label>
                </div>

                <button type="submit" class="btn">Login</button>
                <div class="login-register">
                    <p>¿Sin cuenta? <a href="#" class="login-link">Registro</a></p>
                </div>
            </form>
        </div>
    <!-- Aqui comienza el registro -->
        <div class="form-box register">
            <h2>Registro</h2>
            <form action="php/registro.php" method="post">

                <div class="input-box">
                    <span class="icon"><ion-icon name="mail-outline"></ion-icon></span>
                    <input type="email" name="email" required>
                    <label>Email</label>
                </div>

                <div class="input-box">
                    <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
                    <input type="text" name="user_name" required>
                    <label>Usuario</label>
                </div>

                <div class="input-box"> 
                    <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
                    <input type="password" name="password" required>
                    <label>Contraseña</label>
                </div>

                <button type="submit" class="btn">Regístrate</button>
                <div class="login-register">
                    <p>¿Ya tienes cuenta? <a href="#" class="register-link">Login</a></p>
                </div>
            </form>
        </div>
    </div>
<script src="assets/scripts/script.js"></script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>