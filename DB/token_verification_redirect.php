<?php
session_start();
require_once ('DB_config.php');
$link = mysqli_connect($_DB['host'],$_DB['username'],$_DB['password'],"discord_status");
$sql="SELECT `token` FROM `token`";
$result = mysqli_query($link,$sql);
if ($result)
{
    if ($_POST['token'] == (mysqli_fetch_assoc($result))['token'])
    {
        $_SESSION['token'] = $_POST['token'];
        mysqli_close($link);
        header("location:../index2.php");
        exit;
    }
}
mysqli_close($link);
header("location:../index.html");
exit;
?>