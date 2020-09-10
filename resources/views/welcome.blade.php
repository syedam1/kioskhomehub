<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Kiosk - Beta 1.8</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans&amp;display=swap" rel="stylesheet">
    <link rel="icon" href="./images/kiosk-icon-128.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://kit-free.fontawesome.com/releases/latest/css/free-v4-shims.min.css" media="all" rel="stylesheet">
    <link href="https://kit-free.fontawesome.com/releases/latest/css/free-v4-font-face.min.css" media="all" rel="stylesheet">
    <link href="https://kit-free.fontawesome.com/releases/latest/css/free.min.css" media="all" rel="stylesheet">
</head>

<body class="splash">


    <!-- Use any element to open the sidenav -->
    <span class="fas fa-bars text-white burger-nav animate__animated" style="display:none;" onclick="openNav()" aria-hidden="true"></span>

    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><span class="fas fa-times text-light" aria-hidden="true"></span></a>
        <a href="./about.html">About Kiosk</a>
        <a href="#">Clients</a>
        <a href="#">Contact</a>
    </div>

    <div class="content-container text-center">
        <img class="logo" src="./images/kiosk-white.svg" alt="Kiosk logo"> 
        <p class="subtext">Your next generation home hub</p>
        <a class="show-access-code">Enter access code</a>

        <div id="code_input_container" style="display:none;">
            <form class="code_input">
                <input autofocus="" maxlength="1" placeholder="-" type="number" pattern="[0-9]*" onfocus="this.placeholder = ''">
                <input maxlength="1" placeholder="-" type="number" pattern="[0-9]*" onfocus="this.placeholder = ''">
                <input maxlength="1" placeholder="-" type="number" pattern="[0-9]*" onfocus="this.placeholder = ''">
                <input maxlength="1" placeholder="-" type="number" pattern="[0-9]*" onfocus="this.placeholder = ''">
            </form>
            <p class="hint text-danger">Your code is invalid</p>
            <p class="code-success text-success">Success! You have unlocked the menu</p>
        </div>

    </div>

    <div class="footer">
        <p class="text-light m-0">eTender Inc <script>
                document.write(new Date().getFullYear())
            </script>2020</p>
        <a class="text-primary" href="mailto:andrew@kioskhomehub.com">andrew@kioskhomehub.com</a>
    </div>

    <!-- partial:index.partial.html -->
    <div class="ui">
        <p class="zoom"><span class="zoom zoomin">+</span><span class="zoom zoomout">-</span></p>
        <p class="zoomlevel"><span class="percent">100</span> % - (<span class="width"></span>px)(<span class="height"></span>px)</p>
        <p>Dead: <span class="dead">165</span></p>
        <p>Alive: <span class="alive">210</span></p>
        <p>Drawn: <span class="drawn">210</span></p>
        <p><span class="fps">156</span> FPS</p>
        <a class="save" href="" download="capture.png">Save</a>
    </div>

    <!-- partial -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-autotab/1.9.2/js/jquery.autotab.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.5/lodash.min.js"></script>
    <script src="./js/background.js"></script>
    <script src="./js/code-unlock.js"></script>
    <script src="./js/script.js"></script>
    <script src="https://kit.fontawesome.com/a31d2b5107.js" crossorigin="anonymous"></script>




</body>

</html>