<?php
require_once('token_verification.php');
require_once ('DB_config.php');
$link = mysqli_connect($_DB['host'],$_DB['username'],$_DB['password'],"discord_".$_SESSION['GuildID']);
$sql="SELECT * FROM `music_queue`";
$result = mysqli_query($link,$sql);
if ($result)
{
    while ($result_arr=mysqli_fetch_assoc($result)) 
    {
        if ($result_arr['type'] == 0)
        {
            echo "<tr><td class=video><div class='text'>本地音樂</div></td><td class='title'><a>".$result_arr['title']."</a></td><td class='duration'></td><td class='controller'></td></tr>";
        }
        elseif ($result_arr['type'] == 1)
        {
            echo "<tr><td class=video><div class='videobox'><iframe src='". str_replace("watch?v=","embed/",$result_arr['url'])."' title='YouTube video player' frameborder='0' scrolling='no' allowfullscreen></iframe></div></td><td class='title'><a href='".$result_arr['url']."'>".$result_arr['title']."</a></td><td class='duration'>".$result_arr['duration']."</td><td class='controller'><audio src='".$result_arr['audio_url']."' controls='true'></audio></td></tr>";
        }
        elseif ($result_arr['type'] == 2)
        {
            echo "<tr><td class=video><div class='text'>Google 雲端檔案</div></td><td class='title'><a href='".$result_arr['url']."'>".$result_arr['title']."</a></td><td class='duration'></td><td class='controller'></td></tr>";
        }
    }    
}
mysqli_close($link);
?>