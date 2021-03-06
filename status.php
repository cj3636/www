<!doctype html>
<html lang="en_US">
<?php require 'head.php';
?>
<body>
<div id="page" class="ui stackable grid">
    <div class="sixteen wide column"></div>
    <?php require 'title.php'; ?>
    <div class="sixteen wide column">
        <?php require 'menu.php'; ?>
    </div>
</div>
<div id="page" class="ui stackable grid">
    <div class="center aligned sixteen wide column">
        <div class="ui divider"></div>
        <div class="ui center aligned title">
            <div id="shadowBox">
                <h3 class="rainbow rainbow_text_animated">The Most Adventurous Servers This Side of Pepperland</h3>
            </div>
        </div>
        <div class="ui divider"></div>
        <div class="ui centered stackable cards">
            <?php
            $dir = 'serverstatus';
            $files = glob($dir . '/*.php');
            foreach ($files as $file) {
                require($file);
            }
            ?>
        </div>
    </div>
</body>
</html>
