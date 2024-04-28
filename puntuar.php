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
    </style>
</head>

<body>
    <div>
        <h1>PUNTUACIONES MAS ALTAS</h1>
        <table class="default">

            <tr>

                <th scope="row">Juego</th>

                <th colspan="3">Puntuacion Maxima</th>



            </tr>

            <tr>

                <th>Formulario</th>

                <?php
                include_once('conexion.php');
                session_start();
                if (isset($_SESSION['id'])) {
                $id = $_SESSION['id'];
                //Extraer imagen de la BD mediante GET
                $result = $conexion->query("SELECT * FROM puntuaciones WHERE id_user = $id AND juego='dand' ORDER BY puntuacion DESC LIMIT 3");
                if ($result) {
                    while ($row = $result->fetch_array()) {
                        $valor = $row['puntuacion'];
                ?>
                        <td><?php echo $valor ?></td>
                <?php
                    }
                } else {
                    echo '
                <td>-</td>

                <td>-</td>

                <td>-</td>';
                }


                ?>

            </tr>

            <tr>
                <th>Rompecabezas</th>


                <?php
                
                $id = $_SESSION['id'];
                //Extraer imagen de la BD mediante GET
                $result = $conexion->query("SELECT * FROM puntuaciones WHERE id_user = $id AND juego='rompe' ORDER BY puntuacion DESC LIMIT 3");
                if ($result) {
                    while ($row = $result->fetch_array()) {
                        $valor = $row['puntuacion'];
                ?>
                        <td><?php echo $valor ?></td>
                <?php
                    }
                } else {
                    echo '
                <td>-</td>

                <td>-</td>

                <td>-</td>';
                }
            }else{
                echo'INICIE SESION PARA VER PUNTUACIONES';
            }

                ?>

            </tr>

            

        </table>
    </div>
</body>

</html>