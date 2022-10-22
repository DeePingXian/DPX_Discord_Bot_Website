<?php
session_start();
require_once('./DB/token_verification.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>DC bot 網頁</title>
        <meta name="description" content="DC bot 網頁">
        <meta property="og:title" content="DC bot 網頁" />
        <meta property="og:image" content="./assets/thumbnail.jpg" />
        <meta property="og:description" content="DC bot 網頁" />
        <link rel="icon" href="./assets/icon.ico">
        <script type="text/javascript">
            var language = navigator.language;
            var GuildID;

            if (language.startsWith("zh")){
                GuildID = window.prompt("token驗證成功！\n\n請輸入Discord伺服器/群組ID\n可於該伺服器/群組內任一頻道內輸入「!!getguildid」來向機器人索取ID" , "ID")
            }
            else{
                GuildID = window.prompt("Token Verified！\n\nPlease enter Discord server/guild ID.\nYou could type \"!!getguildid\" in any channel of that servers/guilds to get ID." , "ID")
            }

            location.href="main.php?GuildID="+GuildID;
        </script>
    </head>

    <body>

    </body>
</html>