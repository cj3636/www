<div class="ui two wide column">
    <img class="ui medium centered image" src="img/thenewjourney.png" alt="logo">
</div>
<div class="ui twelve wide column">
    <a id="link1"><h1 class="ui title">The Yellow Submarine Servers</h1></a>
    <h3 class="ui description">Minecraft | Vanilla + Modded</h3>
    <h3 id="desc" class="ui description">
        <script>
            const page = window.location.pathname.split("/").pop();
            const index = "home.php";
            const discord = "discord.php";
            const videos = "videos.php";
            const help = "help.php";
            const about = "about.php";
            const download = "download.php";
            const tryptor = "tryptor.php";
            const game = "game.php";
            const render = "render.php";
            const render2 = "render2.php";
            const status = "status.php";

            function getName() {
                switch (page) {
                    case index:
                        document.getElementById("desc").innerHTML = "Home";
                        break;
                    case discord:
                        document.getElementById("desc").innerHTML = "Discord";
                        break;
                    case videos:
                        document.getElementById("desc").innerHTML = "Videos";
                        break;
                    case help:
                        document.getElementById("desc").innerHTML = "Help | F.A.Q";
                        break;
                    case about:
                        document.getElementById("desc").innerHTML = "The Development and Discord Team";
                        break;
                    case download:
                        document.getElementById("desc").innerHTML = "Modpack Installation";
                        break;
                    case tryptor:
                        document.getElementById("desc").innerHTML = "Advanced Keyed Encryption";
                        break;
                    case game:
                        document.getElementById("desc").innerHTML = "Box2dWeb + Easel JS Basic Physics Engine";
                        break;
                    case render:
                        document.getElementById("desc").innerHTML = "JavaScript Render Engine";
                        break;
                    case render2:
                        document.getElementById("desc").innerHTML = "JavaScript Render Engine 2";
                        break;
                    case status:
                        document.getElementById("desc").innerHTML = "Server Status";
                        break;
                    default:
                        return "";
                }
            }

            getName();

            $('html').css('overflow', 'hidden');
        </script>
    </h3>
</div>
<div class="ui two wide column">
    <a class="ui huge yellow ribbon label" href="https://www.paypal.com/donate?hosted_button_id=REUAFVC9PPVBC"
       target="_blank">
        <div class="ui huge blue button">
            <i class="white paypal icon"></i>Donate
        </div>
    </a>
</div>
