<?php
include 'includes/config.php';
echo '<div class="col-md-4">
<div class="" style="padding:10px; font-size : 16px; font-weight : bold; border-bottom:1px solid gainsboro;">';
include 'ads/adsright.php'; 
echo '
<font color="#C0BEC8">'.$rt.'</font>
<br/>
</div>';
echo ''.$yllix.'';
$grab=ngegrab('https://www.googleapis.com/youtube/v3/search?key='.$tokenkeys.'&part=snippet&maxResults=12&relatedToVideoId='.$_GET['id'].'&type=video');
$json = json_decode($grab);
if($json)
{
foreach($json->items as $hasil) 
{
$rname = $hasil->snippet->title;
$rid = $hasil->id->videoId;
$tgl = $hasil->snippet->publishedAt;
$date = dateyt($tgl);
$des = $hasil->snippet->description;
$rch = $item->snippet->channelTitle;
$chid = $hasil->snippet->channelId;
$linkmake = preg_replace("/[^A-Za-z0-9[:space:]]/","$1",$name);
$linkmake = str_replace(' ','-',$linkmake);
$final = strtolower("$linkmake");
echo '<a href="/watch/'.$rid.'">
<div class="item">
<div class="artwork">
<img height="auto" src="https://img.youtube.com/vi/'.$rid.'/mqdefault.jpg" alt="'.$rname.'"></div>
<div class="meta">
<textt>
<font color="#C1C0C9">'.$rname.'</font>
</textt>
<font color="#738CAF">
<small><tett>'.time_elapsed_string($date).'</small></tett>
<small><tett><b>'.$chtitle.'</b></small></tett>
</font>
</div>
</div>
</a>';
}
}
echo'</div>
</div>
<div class="lr"></div>
</div></div>';
?>