<?php
require_once('token_verification.php');
require_once ('DB_config.php');
$link = mysqli_connect($_DB['host'],$_DB['username'],$_DB['password'],"discord_".$_SESSION['GuildID']."_messagelog");
$sql="SELECT * FROM `channels`";
$result = mysqli_query($link,$sql);
if ($result)
{
    while ($result_arr=mysqli_fetch_assoc($result)) 
    {
        echo "<li><a href='deleted_message_log.php?GuildID=".$_SESSION['GuildID']."&ChannelID=".$result_arr['id']."'>".$result_arr['name']."</a></li>";
    }
    
}
mysqli_close($link);
?>