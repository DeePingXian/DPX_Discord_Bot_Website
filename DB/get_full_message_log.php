<?php
require_once('token_verification.php');
require_once ('DB_config.php');
$link = mysqli_connect($_DB['host'],$_DB['username'],$_DB['password'],"discord_".$_SESSION['GuildID']."_messagelog");
$sql="SELECT * FROM `".$_SESSION['ChannelID']."`";
$result = mysqli_query($link,$sql);
if ($result)
{
    $type = "";
    $attachment = "";
    $editted_at = "";
    $content = array();

    while ($result_arr=mysqli_fetch_assoc($result)) 
    {
        if ($result_arr['type'] == 0)
        {
            $type = "原訊息";
        }
        elseif  ($result_arr['type'] == 1)
        {
            $type = "編輯";
        }
        elseif  ($result_arr['type'] == 2)
        {
            $type = "刪除";
        }

        if ($result_arr['attachment'] != "")
        {
            $attachment = "<td class='attachment'><a href='".$result_arr['attachment']."'>連結</a></td>";
        }
        else
        {
            $attachment = "<td class='attachment'></td>";
        }

        if($result_arr['editted_at'] == "0000-00-00 00:00:00")
        {
            $editted_at = "";
        }
        else
        {
            $editted_at = $result_arr['editted_at'];
        }

        array_push($content , "<tr><td class='author'>".$result_arr['author']."</td><td class='content'>".$result_arr['content']."</td><td class='editted_content'>".$result_arr['editted_content']."</td>".$attachment."<td class='sent_at'>".$result_arr['sent_at']."</td><td class='editted_at'>".$editted_at."</td><td class='type'>".$type."</td></tr>");
    }

    for ($i=count($content)-1;$i>=0;--$i)
    {
        echo $content[$i];
    }
}
mysqli_close($link);
?>