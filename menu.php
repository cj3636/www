<?php require_once 'loginModal.php' ?>
<?php require_once 'signupModal.php' ?>
<div class="sixteen wide column">
    <div class="ui secondary pointing inverted stackable fluid menu ">
        <a id="home" class="item" href="home.php"><i class="large green home icon"></i>
            <div class="ui title">Home</div>
        </a>
        <a id="status" class="item" href="status.php" onclick="disableStatus()"><i
                    class="large orange info circle icon"></i>
            <div class="ui title">Server Status</div>
        </a>
        <nav id="statusLoading" hidden="hidden">
            <a class="item">
                <div class="ui active inline loader"></div>
                <div class="ui title">Server Status</div>
            </a>
        </nav>
        <a id="discord" class="item" href="discord.php"><i class="large blue discord icon"></i>
            <div class="ui title">Discord</div>
        </a>
        <a id="help" class="item" href="help.php"><i class="large yellow question icon"></i>
            <div class="ui title">Help</div>
        </a>
        <a id="about" class="item" href="about.php"><i class="large blue users icon"></i>
            <div class="ui title">About Us</div>
        </a>
        <!--        TODO re implement tryptor and old sites-->
        <!--                        <div id="dropdown" class="ui pointing dropdown item"-->
        <!--                             data-tooltip="Legacy Server's & Interesting Developer API's"-->
        <!--                             data-inverted="">-->
        <!--                            <i class="large purple plus circle icon"></i>-->
        <!--                            <div class="ui title">Legacy</div>-->
        <!--                            <div class="ui inverted menu">-->
        <!--                                <a id="tryptor" href="tryptor.php" class="item">Tryptor</a>-->
        <!--                                <a id="game" href="game.php" class="item">Game</a>-->
        <!--                                <a id="render" href="render.php" class="item">Render 1</a>-->
        <!--                                <a id="render2" href="render2.php" class="item">Render 2</a>-->
        <!--                                <a class="item" href="sa/index.php"><i class="large purple info icon"></i>Second Aether</a>-->
        <!--                                <a class="item" href="qa/index.php"><i class="large pink info icon"></i>Quantum Aether</a>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <div id="account" class="ui pointing dropdown item"
             data-tooltip="Legacy Server's & Interesting Developer API's"
             data-inverted="">
            <i class="large green user circle icon"></i>
            <div class="ui title">Account</div>
            <div class="menu">
                <a class="item" onclick="showLogin()"><i class="large blue sign-in icon"></i>Login</a>
                <a class="item" onclick="showSignup()"><i class="large blue signup icon"></i>Sign Up</a>
            </div>
        </div>
        <a id="tryptor" class="item" href="tryptor.php"><i class="large teal key icon"></i>
            <div class="ui title">Tryptor</div>
        </a>
        <a id="download" class="ui right floated item" href="download.php"><i
                    class="large inverted purple download icon"></i>
            <div class="ui title">Downloads</div>
        </a>
    </div>
</div>
<script>
    function disableStatus() {
        $('#status').hide();
        $('#statusLoading').show();
    }

    setMenuActive();

    function setMenuActive() {
        switch (page) {
            case index:
                document.getElementById("home").className += " active";
                break;
            case discord:
                document.getElementById("discord").className += " active";
                break;
            case videos:
                document.getElementById("videos").className += " active";
                break;
            case help:
                document.getElementById("help").className += " active";
                break;
            case about:
                document.getElementById("about").className += " active";
                break;
            case status:
                document.getElementById("status").className += " active";
                break;
            case download:
                document.getElementById("download").className += " active";
                break;
            case tryptor:
                document.getElementById("tryptor").className += " active";
                break;
            case game:
                document.getElementById("game").className += " active";
                break;
            case render:
                document.getElementById("render").className += " active";
                break;
            case render2:
                document.getElementById("render2").className += " active";
                break;
            default:
                return "";
        }
    }

    $('.ui.dropdown').dropdown();

    function showLogin() {
        $('.ui.basic.modal.login').modal('show');
    }

    function showSignup() {
        $('.ui.basic.modal.signup').modal('show');
    }
</script>
