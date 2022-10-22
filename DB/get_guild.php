<?php
require_once('token_verification.php');
require_once ('DB_config.php');
$link = mysqli_connect($_DB['host'],$_DB['username'],$_DB['password'],"discord_status");

$sql="SELECT * FROM `guilds`";
$result = mysqli_query($link,$sql);

if($result)
{
    while ($result_arr=mysqli_fetch_assoc($result)) 
    {
        if ($_SESSION['GuildID'] == $result_arr['id'])
        {
            mysqli_close($link);
            echo $result_arr['name'];
            goto out;
        }
    }
}

$_SESSION['GuildID'] = "";
mysqli_close($link);
header("location:./index2.php");
exit;

out:

?>