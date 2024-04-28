<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com">
    <link href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
    <title>Formulario Drag and Drop de Preguntas y Respuestas</title>
    <style>
        #evaluador {
            width: 100%;
            height: 100%;
            position: fixed;
            z-index: 100;
            background: rgba(33, 47, 41, 0.5);
            display: none;
            justify-content: center;
            align-items: center;
        }

        html {
            color: white;
            font-family: 'Nunito', sans-serif;
        }

        body {
            margin: 0px;
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;


        }

        #div1,
        #div2 {
            margin: 10px;
            float: left;
            padding: 15px;
            width: 45%;
            height: 94%;
            justify-content: center;
            text-align: center;
        }


        .drop-zone {
            width: 95%;
            padding: 10px;
            border: 2px dashed #aaaaaa;
            margin: 10px;
        }

        .question {
            background-color: #212529;
            box-shadow: 0px 0px 10px #000;
            padding: 10px;
            margin: 5px;
            border-radius: 5px;
            cursor: move;
        }

        h3 {
            text-align: left;
        }

        button {
            height: 50px;
            width: 80%;
            margin-bottom: 20px;
            background: #212529;
            border: 1px solid #202022;
            border-radius: 15px;
            color: white;
            font-family: 'Nunito', sans-serif;
            cursor: pointer;
            box-shadow: 0px 0px 10px #000;
        }

        button:hover {

            color: #07d544;
            cursor: pointer;
            border: 1px solid #07d544;
        }

        #res {
            height: 38px;
        }
    </style>
</head>

<body>
    <?php if (!isset($_SESSION['id'])) {?>
        <div id="evaluador" onclick="save2()">
            <h1>puntuacion</h1>
        </div>
    <?php } else { ?>
        <div id="evaluador" onclick="save()">
            <h1>puntuacion</h1>
        </div>
    <?php } ?>
    <div id="div1">
        <button id="evalua">EVALUAR</button>
        <div id="questions-container">
            <div id="xr1" class="question" draggable="true" ondragstart="drag(event)"><img draggable="false" id="res" src="img/or.png">
            </div>
            <div id="xr2" class="question" draggable="true" ondragstart="drag(event)"><img draggable="false" id="res" src="img/32.png">
            </div>
            <div id="xr3" class="question" draggable="true" ondragstart="drag(event)"><img id="res" draggable="false" src="img/karnaugh.png"></div>
            <div id="xr4" class="question" draggable="true" ondragstart="drag(event)"><img id="res" draggable="false" src="img/compuertanot.png"></div>
            <div id="xr5" class="question" draggable="true" ondragstart="drag(event)"><img draggable="false" id="res" src="img/xp.jpeg">
            </div>
            <div id="xr6" class="question" draggable="true" ondragstart="drag(event)"><img draggable="false" id="res" src="img/not.png">
            </div>
            <div id="xr7" class="question" draggable="true" ondragstart="drag(event)"><img draggable="false" id="res" src="img/bit.png">
            </div>
            <div id="xr8" class="question" draggable="true" ondragstart="drag(event)"><img draggable="false" id="res" src="img/regla.png">
            </div>
            <div id="xr9" class="question" draggable="true" ondragstart="drag(event)"><img id="res" draggable="false" src="img/morgan.png"></div>
            <div id="xr10" class="question" draggable="true" ondragstart="drag(event)"><img draggable="false" id="res" src="img/and.gif">
            </div>

        </div>
    </div>
    <div id="div2">
        <h3>PREGUNTA 1</h3>
        <div class="drop-zone" id="1" ondrop="drop(event)" ondragover="allowDrop(event)">
            ¿Qué valor puede tener un bit?
        </div>
        <h3>PREGUNTA 2</h3>
        <div class="drop-zone" id="2" ondrop="drop(event)" ondragover="allowDrop(event)">
            Código de la compuerta OR:
        </div>
        <h3>PREGUNTA 3</h3>
        <div class="drop-zone" id="3" ondrop="drop(event)" ondragover="allowDrop(event)">
            Matriz de celdas para simplificar una expresión booleana
        </div>
        <h3>PREGUNTA 4</h3>
        <div class="drop-zone" id="4" ondrop="drop(event)" ondragover="allowDrop(event)">
            ¿Cuántas celdas requiere un mapa de Karnaugh de cinco variables?
        </div>
        <h3>PREGUNTA 5</h3>
        <div class="drop-zone" id="5" ondrop="drop(event)" ondragover="allowDrop(event)">
            Suelta aquí la respuesta correcta
        </div>
        <h3>PREGUNTA 6</h3>
        <div class="drop-zone" id="6" ondrop="drop(event)" ondragover="allowDrop(event)">
            Diagrama AND
        </div>
        <h3>PREGUNTA 7</h3>
        <div class="drop-zone" id="7" ondrop="drop(event)" ondragover="allowDrop(event)">
            Diagrama NOT
        </div>
        <h3>PREGUNTA 8</h3>
        <div class="drop-zone" id="8" ondrop="drop(event)" ondragover="allowDrop(event)">
            Sistema operativo donde se ejecuta VHDL
        </div>
        <h3>PREGUNTA 9</h3>
        <div class="drop-zone" id="9" ondrop="drop(event)" ondragover="allowDrop(event)">
            Leyes DeMorgan
        </div>
        <h3>PREGUNTA 10</h3>
        <div class="drop-zone" id="10" ondrop="drop(event)" ondragover="allowDrop(event)">
            Compuerta NOT
        </div>
    </div>


    <script>
        const e = document.getElementById("evaluador");
//funciones Drag&Drop
        function allowDrop(ev) {
            ev.preventDefault();
        }

        function drag(ev) {

            ev.dataTransfer.setData("text", ev.target.id);
        }

        function drop(ev) {
            ev.preventDefault();
            var data = ev.dataTransfer.getData("text");
            console.log(data);
            ev.target.appendChild(document.getElementById(data));
        }

//funciones Drag&Drop




//div flotante que muestra la puntuacion del jugador
        document.getElementById("evalua").addEventListener("click", evaluar)
        var pf = 0;
//evalua las respuestas correctas, incorrectas y sin contestar del jugador 
//su puntuacion inicia en 0 y aumenta segun compruebe si es correcta o no
        function evaluar() {
            var puntuacion = 0;
            var sumador = 1.11111111111;
            const p1 = document.getElementById('xr1');
            const p2 = document.getElementById('xr2');
            const p3 = document.getElementById('xr3');
            const p4 = document.getElementById('xr4');
            const p5 = document.getElementById('xr5');
            const p6 = document.getElementById('xr6');
            const p7 = document.getElementById('xr7');
            const p8 = document.getElementById('xr8');
            const p9 = document.getElementById('xr9');
            const p10 = document.getElementById('xr10');
            if (p1.parentNode.id == '2' &&
                p2.parentNode.id == '4' &&
                p3.parentNode.id == '3' &&
                p4.parentNode.id == '10' &&
                p5.parentNode.id == '8' &&
                p6.parentNode.id == '7' &&
                p7.parentNode.id == '1' &&
                p8.parentNode.id == '5' &&
                p9.parentNode.id == '9' &&
                p10.parentNode.id == '6') {
                puntuacion = 10;
                showP(puntuacion);

            } else {
                if (p1.parentNode.id == '2') puntuacion += sumador;
                if (p2.parentNode.id == '4') puntuacion += sumador;
                if (p3.parentNode.id == '3') puntuacion += sumador;
                if (p4.parentNode.id == '10') puntuacion += sumador;
                if (p5.parentNode.id == '8') puntuacion += sumador;
                if (p6.parentNode.id == '7') puntuacion += sumador;
                if (p7.parentNode.id == '1') puntuacion += sumador;
                if (p8.parentNode.id == '5') puntuacion += sumador;
                if (p9.parentNode.id == '9') puntuacion += sumador;
                if (p10.parentNode.id == '6') puntuacion += sumador;
                showP(puntuacion);
            }
        }
//hace visible el div y muestra la puntuacion calculada
        function showP(p) {
            e.style.display = 'flex';
            e.innerHTML = '<h1>Felicidades, has hecho el Rompecabezas puntuacion:  "' + parseInt(p) + '"<h1>';
            pf = p;
        }
//al cerrar el div redirige a pagina php para guardar en base de datos
        function save() {
            e.style.display = 'none';
            pf = parseInt(pf);
            window.location = "puntuaciones.php?puntuacion=" + pf + "&game=dand";
        }
    </script>
</body>

</html>