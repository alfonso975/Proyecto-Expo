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
        body {

            color: white;
            width: 100%;
            height: 100vh;
            margin: 0px;

        }

        h1 {
            font-family: 'Nunito', sans-serif;
        }



        #title {
            font-size: 20px;
        }

        #rest2 {
            font-size: 13px;
        }

        #text div {
            position: relative;
            height: 200px;
            width: 200px;
            border: 1px dashed gray;
            display: inline-block;
            margin: 0;
        }

        #text {
            width: 614px;
            height: 614px;
            background: black;
            border: 5px solid black;
            margin: auto;
        }

        #images {
            width: 100%
        }

        img {
            height: 200px;
            width: 200px;
        }

        #drag4,
        #drag5,
        #drag6,
        #drag7,
        #drag8,
        #drag9,
        #drag10,
        #drag11,
        #drag12 {
            height: 200px;
            width: 200px;
            display: inline-block;
            background-size: cover;
            background-repeat: no-repeat;
        }

        #drag4 {
            background-image: url('img/4.jpg');
        }

        #drag5 {
            background-image: url('img/2.jpg');
        }

        #drag6 {
            background-image: url('img/1.jpg');
        }

        #drag7 {
            background-image: url('img/7.jpg');
        }

        #drag8 {
            background-image: url('img/5.jpg');
        }

        #drag9 {
            background-image: url('img/8.jpg');
        }

        #drag10 {
            background-image: url('img/3.jpg');
        }

        #drag11 {
            background-image: url('img/6.jpg');
        }

        #drag12 {
            background-image: url('img/9.jpg');
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

        .info {
            padding-top: 15px;
            text-align: center;
        }
    </style>
</head>

<body>
    <?php if (!isset($_SESSION['id'])) { ?>
        <div id="evaluador" onclick="save2()">
            <h1>puntuacion</h1>
        </div>
    <?php } else { ?>
        <div id="evaluador" onclick="save()">
            <h1>puntuacion</h1>
        </div>
    <?php } ?>
    <div class="info">
        <button id="evalua">EVALUAR</button>
    </div>

    <div id="images">
        <div id="drag4" draggable="true" ondragstart="drag(event)"></div>
        <div id="drag5" draggable="true" ondragstart="drag(event)"></div>
        <div id="drag6" draggable="true" ondragstart="drag(event)"></div>
        <div id="drag7" draggable="true" ondragstart="drag(event)"></div>
        <div id="drag8" draggable="true" ondragstart="drag(event)"></div>
        <div id="drag9" draggable="true" ondragstart="drag(event)"></div>
        <div id="drag10" draggable="true" ondragstart="drag(event)"></div>
        <div id="drag11" draggable="true" ondragstart="drag(event)"></div>
        <div id="drag12" draggable="true" ondragstart="drag(event)"></div>
    </div>

    <div id="text">
        <div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
        <div id="div2" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
        <div id="div3" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
        <div id="div4" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
        <div id="div5" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
        <div id="div6" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
        <div id="div7" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
        <div id="div8" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
        <div id="div9" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
    </div>



    <script>
        const e = document.getElementById("evaluador");
        var pf = 0;

        function allowDrop(ev) {
            ev.preventDefault();
        }

        function drag(ev) {
            ev.dataTransfer.setData("text", ev.target.id);
        }

        function drop(ev) {
            ev.preventDefault();
            var data = ev.dataTransfer.getData("text");
            ev.target.appendChild(document.getElementById(data));
        }

        document.getElementById("evalua").addEventListener("click", evaluar)

        function evaluar() {
            var puntuacion = 0;
            var sumador = 1.11111111111;
            const p1 = document.getElementById('drag4');
            const p2 = document.getElementById('drag5');
            const p3 = document.getElementById('drag6');
            const p4 = document.getElementById('drag7');
            const p5 = document.getElementById('drag8');
            const p6 = document.getElementById('drag9');
            const p7 = document.getElementById('drag10');
            const p8 = document.getElementById('drag11');
            const p9 = document.getElementById('drag12');
            if (p1.parentNode.id == 'div6' &&
                p2.parentNode.id == 'div8' &&
                p3.parentNode.id == 'div9' &&
                p4.parentNode.id == 'div3' &&
                p5.parentNode.id == 'div5' &&
                p6.parentNode.id == 'div2' &&
                p7.parentNode.id == 'div7' &&
                p8.parentNode.id == 'div4' &&
                p9.parentNode.id == 'div1') {
                puntuacion = 10;
                showP(puntuacion);

            } else {
                if (p1.parentNode.id == 'div6') puntuacion += sumador;
                if (p2.parentNode.id == 'div8') puntuacion += sumador;
                if (p3.parentNode.id == 'div9') puntuacion += sumador;
                if (p4.parentNode.id == 'div3') puntuacion += sumador;
                if (p5.parentNode.id == 'div5') puntuacion += sumador;
                if (p6.parentNode.id == 'div2') puntuacion += sumador;
                if (p7.parentNode.id == 'div7') puntuacion += sumador;
                if (p8.parentNode.id == 'div4') puntuacion += sumador;
                if (p9.parentNode.id == 'div1') puntuacion += sumador;
                showP(puntuacion);
            }
        }

        function showP(p) {
            e.style.display = 'flex';
            e.innerHTML = '<h1>Felicidades, has hecho el Rompecabezas puntuacion:  "' + parseInt(p) + '"<h1>';
            pf = p;
        }
        function save() {
            e.style.display = 'none';
            window.location = "puntuaciones.php?puntuacion=" + pf + "&game=rompe";
        }

        function save2() {
            e.style.display = 'none';
        }
    </script>
</body>

</html>