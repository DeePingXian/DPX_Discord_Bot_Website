<?php
    session_start();
    require_once('./DB/token_verification.php');
    $_SESSION['GuildID'] = $_GET['GuildID'];
    require_once('./DB/check_guild.php');
    $_SESSION['ChannelID'] = $_GET['ChannelID'];
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
            <div class="content">
                <div class="channels">
                    <ul>
                        <?php require_once('./DB/get_channel.php'); ?>
                    </ul>
                </div>
                <div class="msglog">
                    <table>
                        <tbody>
                            <tr>
                                <td class="author" style="text-align: center;">訊息作者</td>
                                <td class="content" style="text-align: center;">訊息內容</td>
                                <td class="editted_content" style="text-align: center;">編輯後訊息</td>
                                <td class="attachment" style="text-align: center;">附件</td>
                                <td class="sent_at" style="text-align: center;">傳送時間<br>UTC</td>
                                <td class="editted_at" style="text-align: center;">編輯/刪除時間 UTC</td>
                                <td class="type" style="text-align: center;">類型</td>
                            </tr>
                            <?php 
                                if ($_SESSION['ChannelID'] != 0)
                                {
                                    require_once('./DB/get_full_message_log.php');} ?>
                        </tbody>
                    </table>
                </div>
                <div class="clear"></div>
            </div>
        </div>
   </body>
</html>