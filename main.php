<?php
    session_start();
    require_once('./DB/token_verification.php');
    $_SESSION['GuildID'] = $_GET['GuildID'];
    require_once('./DB/check_guild.php');
?>

<!DOCTYPE html>

<html lang="zh-TW">
    <head>
        <meta charset = "utf-8">
        <title>DC bot 網頁</title>
        <meta name="description" content="DC bot 網頁">
        <meta property="og:title" content="DC bot 網頁" />
        <meta property="og:image" content="./assets/thumbnail.jpg" />
        <meta property="og:description" content="DC bot 網頁" />
        <link rel="icon" href="./assets/icon.ico">
        <link rel="stylesheet" href="./style/main.css">
    </head>
    <body>
        <div class="wrapper">
            <div class="header">
                <a href="./index2.php">
                    <div class="homebutton">
                        <img src="./assets/homeButton.jpg">
                    </div>
                </a>
                <div class="banner">
                    <img src="./assets/banner.jpg">
                    <div class="nav">
                        <ul>
                            <li><div class="msglog">訊息歷史
                                <div>
                                    <a href=<?php echo"'./full_message_log.php?GuildID=".$_GET['GuildID']."&ChannelID=0'"; ?>>完整內容</a>
                                    <a href=<?php echo"'./editted_message_log.php?GuildID=".$_GET['GuildID']."&ChannelID=0'"; ?>>僅編輯</a>
                                    <a href=<?php echo"'./deleted_message_log.php?GuildID=".$_GET['GuildID']."&ChannelID=0'"; ?>>僅刪除</a>
                                </div>
                            </div></li>
                            <li><a class="music" href=<?php echo"'./music.php?GuildID=".$_GET['GuildID']."'"; ?>>音樂隊列</a></li>
                            <li><a class="instructions" href=<?php echo"'./instructions.php?GuildID=".$_GET['GuildID']."'"; ?>>操作說明</a></li>
                        </ul>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="GuildName">
                <?php require_once('./DB/get_guild.php'); ?>
            </div>
        </div>
   </body>
</html>