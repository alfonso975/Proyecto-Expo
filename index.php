<?php session_start(); ?>
<html>

<head>
    <title>PROYECTO</title>
    <link rel="icon" href="img/logo.png" />
    <link href="https://fonts.googleapis.com">
    <link href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /*ENVIAR A HOJA DE ESTILOS*/
        html {
            font-family: 'Nunito', sans-serif;
        }

        h1 {
            font-weight: bold;
        }

        #formulario {
            backdrop-filter: blur(5px);
            background-color: rgba(38, 48, 70, 1);
            transition: backdrop-filter 0.5s ease;
            /*transicion suave*/
        }

        #formulario.blur {
            backdrop-filter: blur(0);
        }

        body {
            width: 100%;
            height: 100vh;
            margin: 0px;

            background-color: #212529;

            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
            backdrop-filter: blur(10px);
        }

        input {
            border-radius: 15px;
            padding: 5px;

        }

        #nav {
            width: 100%;
            height: 10%;
            background: linear-gradient(90deg,
                    rgba(2, 0, 36, 1) 0%,
                    rgba(9, 121, 92, 1) 35%,
                    rgba(0, 212, 255, 1) 100%);
        }

        .login-form h3 {
            text-align: left;
            margin-left: 40px;
            margin-bottom: 0px;
            color: #fff;
        }

        .login-form {
            display: none;
            max-width: 500px;
            border: 0.5px solid black;
            /*opcity form*/
            opacity: 0.8;
            -moz-opacity: 0.8;
            filter: alpha(opacity=50);
            -khtml-opacity: 0.8;
            border-radius: 10px;
            box-shadow: 0px 0px 10px #000;
            box-sizing: border-box;
            padding-top: 15px;
            padding-bottom: 10%;
            margin: 5% auto;
            text-align: center;
        }

        #user,
        #pass {
            font-size: 15px;
            max-width: 400px;
            width: 85%;
            font-family: 'Nunito', sans-serif;
            margin: 1em 2em;
            border: none;
            outline: none;
        }

        .login-form input[type="button"] {
            height: 30px;
            width: 200px;
            background: #212529;
            border: 1px solid #202022;
            border-radius: 20px;
            color: white;
            font-family: 'Nunito', sans-serif;
            cursor: pointer;
            box-shadow: 0px 0px 10px #000;
        }

        .login-button {
            margin: 60px;
            max-width: 300px;
            transition: transform 0.7s;

        }

        .sign-up {
            transition: transform 0.7s;
            color: white;
            border: 1px solid white;
            border-radius: 5px;
            padding: 5px;
        }

        .login-form input[type="button"]:hover,
        .sign-up:hover {
            transform: scale(1.2);
            color: #07d544;
            cursor: pointer;
            border: 1px solid #07d544;
        }

        #user:focus,
        #pass:focus {
            color: white;
            background-color: #263046;
            box-shadow: 2px 2px 2px 1px rgba(255, 255, 255, 0.2);
        }

        #head {
            color: white;
            font-size: 35px;
        }
        iframe {
            overflow-y: none;
            width: 100%;
            height: 90%;
            border: none;
        }
        /*nav*/
        nav {
            background-color: #38383B;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        nav a {
            color: #ffffff;
            text-decoration: none;
            margin: 0 15px;
            font-size: 16px;
        }

        nav a:hover {
            color: #07d544;
        }

        .logo {
            color: #ffffff;
            font-size: 24px;
            font-weight: bold;
        }

        .logo {
            width: 27px;
            height: 27px;
        }

        /*nav*/

        /*dropdown*/
        .dropdown {
            display: none;
            border-radius: 20px;
            position: absolute;
            background-color: #38383B;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown a {
            color: #ffffff;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown a:hover {
            color: #07d544;
        }

        .dropdown-btn:hover .dropdown {
            display: block;
        }

        .dropdown-btn1:hover .dropdown {
            display: block;
            right: 0px;
        }


        /*dropdown*/

        footer {
            background-color: #38383B;
            border-top-left-radius: 25px;
            border-top-right-radius: 25px;
            position: absolute;
            bottom: 0;
            width: 100%;
            color: #ffffff;
            text-align: center;
        }

        h4 {
            color: white;
        }

        #error {
            color: red;
        }

        #imgProfile {
            width: 35px;
            height: 35px;
            background-attachment: fixed;
            border-radius: 80px;
        }
    </style>
</head>

<body>

    <main></main>
    <nav>
        <div class="logo"><img class="logo" src="img/logo.png"></div>

<!--validacion php para comprobar si el usuario es un userAdmin o user tambien se valida en admin.php para evitar accesos no validos-->

        <?php if (!isset($_SESSION['id'])) { ?>
            <a href="#" onclick="inicio()">Inicio Sesion</a>
            <?php } else {
            if ($_SESSION['usuario'] === 'admin') { ?>
                <a href="#" onclick="validar('admin.php')">Admin Users</a>
            <?php } else { ?>
                <a href="#" onclick="validar('inicio.html')">Inicio</a>

        <?php }
        } ?>
<!--validacion php para comprobar si el usuario es un userAdmin o user tambien se valida en admin.php para evitar accesos no validos-->



        <div class="dropdown-btn">
            <a href="#">Cursos</a>
            <div class="dropdown">
                <a onclick="validar('DandD.php')">Formulario DRAG&DROP</a>
                <a onclick="validar('rompe.php')">Rompecabezas</a>
                <a onclick="validar('ahorcado')">Ahorcado</a>
            </div>
        </div>



        <a onclick="validar('puntuar.php')">Puntuaciones</a>
        <a onclick="validar('about')">Sobre nosotros</a>
        <a id="fecha"></a>
<!--comprueba si existe sesion-->
        <?php if (!isset($_SESSION['id'])) { ?>
            <a><img src="img/user.png" alt="" id="imgProfile"></a>
        <?php } else { ?>
            <a><?php if($_SESSION['usuario']=='admin'){?>
                <img title="USUARIO ADMINISTRADOR" src="https://upload.wikimedia.org/wikipedia/commons/9/9c/Punto_azul.png" style="margin-right:5xp;width: 10px;box-shadow: 0 8px 8px 0 rgba(0, 0, 0, 0.15)">
                <?php }else{?>
                    <img title="USUARIO" src="https://upload.wikimedia.org/wikipedia/commons/b/b9/Punto_verde.png" style="margin-right:5xp;width: 10px;box-shadow: 0 8px 8px 0 rgba(0, 0, 0, 0.15)">
                    <?php   }  echo $_SESSION['name']; ?></a>
            <div class="dropdown-btn1">
            
                <a><img src="vista.php" alt="" id="imgProfile"></a>
                <div class="dropdown">
                    <form id="cerrarS" name="cerrarS" action="sesion.php" method="post">
                        <a onclick="cerrar()">Cerrar Sesion</a>
                    </form>
                </div>
            </div>
        <?php } ?>

<!--comprueba si existe sesion-->
    </nav>
    <div id="formulario" class="login-form">
        <form id="inicioS" action="logIn.php" method="post">
            <h1 id="head">INICIO SESION</h1>
            <h3>Usuario:</h3>
            <input id="user" name="user" onclick="limpiar()" type="text" placeholder="Username" /><br />
            <h3>Contraseña:</h3>
            <input id="pass" name="pass" type="password" placeholder="Password" />
            <br />
            <input type="button" value="LOGIN" class="login-button" onclick="validar('inicio')" />
            <br />
            <h3 id="error"></h3><br />
            <h4>¿Aun no tienes cuenta?</h4>

            <a class="sign-up" onclick="validar('reg.html')">Registrate!</a>
            <br />

        </form>
    </div>
    <iframe id="frame" src="inicio.html"></iframe>
    <footer>
        <p>&copy; 2023 Sobre Nosotros | Todos los derechos reservados</p>
    </footer>
    <script>
        let today = new Date();
        today = today.toLocaleDateString('en-us', {
            weekday: "long",
            year: "numeric",
            month: "short",
            day: "numeric"
        });
        document.getElementById('fecha').innerHTML = today;


        function cerrar() {
            document.getElementById("cerrarS").submit();
        }
       //redirecciona el frame si se desea iniciar sesion
       //valida input User con expresiones regulares (no admite caracteres especiales)
    
        function validar(src) {
            if (src.includes('php')) {
                var destino = src;
            } else if (src.includes('html')) {
                var destino = src;
            } else {
                var destino = src + ".html";
            }
            if (src == 'inicio') {
                var user = document.getElementById("user");
                var error = document.getElementById("error");
                user = user.value;
                const formato = /[`!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?~]/;
                texto = user.toString();
                if (formato.test(texto)) {
                    error.innerHTML = 'No puedes ingresar caracteres especiales en el usuario';
                } else {

                    document.getElementById("inicioS").submit();


                }
            } else {
                document.body.style.backgroundImage = "url('')";
                const div = document.getElementById("formulario");
                const frame = document.getElementById("frame");

                console.log(destino);
                div.style.display = 'none';
                frame.style.display = 'block';
                frame.src = destino;
            }

        }

        function inicio() {
            const div = document.getElementById("formulario");
            const frame = document.getElementById("frame");
            document.body.style.backgroundImage = "url('https://img.freepik.com/fotos-premium/fondo-tecnologia-abstracta-codigo-programacion_34663-30.jpg')";
            div.style.display = 'block';
            frame.style.display = 'none';
            frame.src = "";

        }
//al hace validaciones con la funcion "validar()" se pueden crear errores que se presentan en la pantalla al usuario
//ej: No puedes ingresar caracteres especiales en el usuario
//la funcion limpiar elimina el mensaje de la pantalla
        function limpiar() {
            var error = document.getElementById("error");
            error.innerHTML = '';
        }
    </script>
</body>

</html>