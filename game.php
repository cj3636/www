<!DOCTYPE html>
<html lang="en-us">
<head>
    <meta charset="UTF-8">
    <title>Physics Engine(BETA)</title>
    <link rel="stylesheet" type="text/css" href="css/game.css">
</head>

<body onload="onload()" oncontextmenu="return false;">
<p id="hide">
    <a href="home.php">Go Back</a><br>
    <label for="userInput"></label><input class="user" type="text" id="userInput">Ball Bounce<br>
    <label for="userInput2"></label><input class="user1" type="text" id="userInput2">Right-Left Gravity<br>
    <label for="userInput3"></label><input class="user2" type="text" id="userInput3">Down-Up Gravity<br>
    <label for="userInput4"></label><input class="user3" type="text" id="userInput4">Ball Image(Direct URL)<br><br>
    <button onclick="test();">Submit</button>
    <button id="default" onclick="init()">Default Settings</button>
    <button id="reset" onclick="location.reload(true)">Reset All</button>
</p>
<canvas id="canvas" width="1000" height="800"></canvas>
<canvas id="debug" width="1000" height="800"></canvas>
<script>
    //Ball letiables
    let ballImage = "img/n64.png";
    let ballDensity = 1;
    let ballFriction = .5;
    let ballBounce = .8;
    //Square letiables
    let squareDensity = 1;
    let squareFriction = .5;
    let squareBounce = .8;
    //Ground letiables
    let xGravity = 0;
    let yGravity = 50;

    function test() {
        document.getElementById('default').innerHTML = 'Initialize';
        let userInput = document.getElementById("userInput").value;
        let userInput2 = document.getElementById("userInput2").value;
        let userInput3 = document.getElementById("userInput3").value;
        let userInput4 = document.getElementById("userInput4").value;
        if (userInput !== "") {
            ballBounce = userInput;
        }
        if (userInput2 !== "") {
            xGravity = userInput2;
        }
        if (userInput3 !== "") {
            yGravity = userInput3;
        }
        if (userInput4 !== "") {
            ballImage = userInput4;
        }
        init();
    }

    function onload() {
        let c = document.getElementById("canvas");
        let ctx = c.getContext("2d");
    }
</script>
<script src="js/jquery.js"></script>
<script src="js/EaselJS.js"></script>
<script src="js/box2dweb.js"></script>
<script src="js/Main.js"></script>
<script src="js/Ball.js"></script>
<script src="js/Square.js"></script>
<script src="js/Ground.js"></script>
</body>
</html>