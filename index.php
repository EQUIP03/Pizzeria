<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="styleS.css">
    <script src="../inicio_s/validar.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <title>PLANTILLA DE PROYECTO</title>
</head>
<body>
    <section class="side">
        <img src="../img/logo.jpg">
    </section>

    <section class="main">
        <div class="login-container">
            <p class="title">INICIO DE SESION</p>
            <div class="separator"></div>
            <p class="welcome-message">------</p>

            <form class="login-form" method="post" id="from_id">
                <div class="form-control">
                    <input type="text" placeholder="Usuario" name="usuar" id="usuar">
                    <i class="fas fa-user"></i>
                </div>
                <div class="form-control">
                    <input placeholder="password" type="Password" name="password" id="password">
                    <i class="fas fa-lock"></i>
                </div>

                <input class="submit" type="button" value="INGRESAR" id="submit" onclick="validate()">
            </form>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>
