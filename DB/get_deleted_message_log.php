<?php
require_once('token_verification.php');
require_once ('DB_config.php');
$link = mysqli_connect($_DB['host'],$_DB['username'],$_DB['password'],"discord_".$_SESSION['GuildID']."_messagelog");
$sql="SELECT * FROM `".$_SESSION['ChannelID']."`";
$result = mysqli_query($link,$sql);
if ($result)
{
    $attachment = "";
    $content = array();

    while ($result_arr=mysqli_fetch_assoc($result)) 
    {
        if  ($result_arr['type'] == 2)
        {
            if ($result_arr['attachment'] != "")
            {
                $attachment = "<td class='attachment'><a href='".$result_arr['attachment']."'>連結</a></td>";
            }
            else
            {
                $attachment = "<td class='attachment'></td>";
            }

            array_push($content , "<tr><td class='author'>".$result_arr['author']."</td><td class='content'>".$result_arr['content']."</td><td class='editted_content'>".$result_arr['editted_content']."</td>".$attachment."<td class='sent_at'>".$result_arr['sent_at']."</td><td class='editted_at'>".$result_arr['editted_at']."</td><td class='type'>刪除</td></tr>");
        }
    }

    for ($i=count($content)-1;$i>=0;--$i)
    {
        echo $content[$i];
    }
}
mysqli_close($link);
?>