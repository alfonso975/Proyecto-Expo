<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <title>TODO supply a title</title>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com">
    <link href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        input{
            background-color: #212529;
            outline: none;
            color: white;
            font-family: 'Nunito', sans-serif;
            font-size: 25px;
            padding: 0px;
            max-width: 150px;
            border-radius: 5px;
        }
        body {

            margin: 0px;
            color: white;
            width: 100%;
            height: 100vh;
            font-family: 'Nunito', sans-serif;
            font-size: 25px;
        }

        table {
            width: 100%;
        }

        td {
            text-align: center;
        }

        th {
            background: rgba(33, 47, 41, 0.9);
            padding: 0px;
        }

        h1 {
            text-align: center;
        }
        .buttons{
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .eliminar{
            margin-left: 15px;
            width: 22px;
            transition: transform 0.7s;
            border: 1px solid red;
            border-radius: 100px;
            padding: 5px;
        }
        .eliminar:hover{
            cursor: pointer;
            transform: scale(1.2);
            border: 1px solid #07d544;
        }
        .but {
            background-color: #212529;
            transition: transform 0.7s;
            color: white;
            border: 1px solid white;
            border-radius: 5px;
            padding: 5px;
        }
        .but:hover{
            transform: scale(1.2);
            color: #07d544;
            cursor: pointer;
            border: 1px solid #07d544;
        }
    </style>
</head>

<body>
    <div>
        <h1>USUARIOS</h1>
        <table class="default">
            <tr>
                <th colspan="1">Usuario</th>
                <th scope="row">Contraseña</th>
                <th scope="row">Email</th>
                <th scope="row">Nombre</th>
                <th scope="row">Edad</th>
                <th scope="row">Sexo</th>
                <th scope="row">País</th>
                <th scope="row">Cambiar/Eliminar</th>
            </tr>
            <?php
            include_once('conexion.php');
            if (isset($_SESSION['id'])) {
                $id = $_SESSION['id'];
                //consultamos la base de datos y traemos todos los registros para editarlos desde userAdmin
                $result = $conexion->query("SELECT * FROM usuarios");
                if ($result) {
                    while ($row = $result->fetch_array()) {
            ?>
                        <tr>
                            <th><input type="text" id="user_<?php echo $row['id']; ?>" value="<?php echo $row['usuario']; ?>"></td>
                            <td><input type="text" id="pass_<?php echo $row['id']; ?>" value="<?php echo $row['pass']; ?>"></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><input type="text" id="name_<?php echo $row['id']; ?>" value="<?php echo $row['nombre']; ?>"></td>
                            <td><input type="text" id="age_<?php echo $row['id']; ?>" value="<?php echo $row['edad']; ?>"></td>
                            <td><?php echo $row['sexo']; ?></td>
                            <td><?php echo $row['pais']; ?></td>
                            <td class="buttons">
                                <button class="but" onclick="edit(<?php echo $row['id']?>,'c')">CAMBIAR</button>
                                <img src="img/delete.png" class="eliminar" onclick="edit(<?php echo $row['id']?>,'e')">
                            </td>


                        </tr>
                <?php
                    }
                } else {
                    echo '
                <td>-</td>

                <td>-</td>

                <td>-</td>';
                }


                ?>


            <?php } ?>
        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
    <script>
        function edit(id,t){
            i = parseInt(id);
            var u =  $('#user_'+id+'').val();
            var c =  $('#pass_'+id+'').val();
            var n =  $('#name_'+id+'').val();
            var a =  $('#age_'+id+'').val();
            console.log(u+" "+c+" "+n+" "+a);
            //obtenemos los valores de los inputs a editar y enviamos a editar.php mediante url
            window.location = "editar.php?id=" + i + "&type="+t+"&u="+u+"&c="+c+"&n="+n+"&e="+a+"";
        }
    </script>
</body>

</html>