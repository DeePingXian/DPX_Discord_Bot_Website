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
            <div class="instructions">
                <p><h1>音樂隊列</h1><br>YouTube 影片提供直接播放、下載功能，因動態素材連結特性，音訊播放區的音訊過一段時間就會失效，如果要讓它復活，請用DC機器人重新將該音樂放進隊列裡（讓它更新資訊），並重新整理網頁。</p><br>
                <p><h1>訊息歷史紀錄</h1><br>資料由新到舊排列，注意時間為UTC，而非CST。</p><br><br><br>
                <p>最低顯示寬度：1600像素 建議顯示寬度：1920像素以上</p>
            </div>
        </div>
   </body>
</html>