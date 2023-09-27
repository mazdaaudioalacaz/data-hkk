<?php
include 'includes/func.php';
include 'admin/config.php';
$id=''.$_GET['id'].'';
$yf=ngegrab('https://www.googleapis.com/youtube/v3/videos?key='.$tokenkeys.'&part=snippet,contentDetails,statistics,topicDetails&id='.$_GET['id'].'');
$yf=json_decode($yf);
foreach ($yf->items as $item){
$name=$item->snippet->title;
{$title='Download '.$name.' Mp3 & Mp4';}
$description='Download '.$name.' in Various Possible qualities, Download '.$name.' in Hd, Download '.$name.' in Mp4, Download '.$name.' in Webm, Download '.$name.' in 3gp, Download '.$name.' in Mp3, ';
$keywords=''.$name.' 3gp, '.$name.' Hd, '.$name.' Mp4, '.$name.' Webm, '.$name.' Flv, '.$name.'  Mp3, Indian, Pakistani, Bangali, Hollywood, Bollywood, Lollywood, Tik Tok, Whatsapp, Instagram, 3gp, Mp4, Hd';
$ogimg='https://i.ytimg.com/vi/'.$id.'/hqdefault.jpg';
include 'includes/header.php';
echo '<div class="lr blog-post" style="margin-top: 39px; min-height: 500px">
<div class="lr">
<h3 style="color:#E34234;">Download '.$name.'</h3>
<center>
<p>
<img src="//i.ytimg.com/vi/'.$id.'/hqdefault.jpg" alt="'.$name.'" class="img-rounded img-thumbnail"/>
</p>
<br>
<p style="max-width: 500px;">
<iframe src="https://api.webs.moe/@api/button/mp3/'.$id.'" width="100%" height="90" allowtransparency="true" scrolling="no" style="border:none"></iframe>
<br>
<iframe src="https://api.webs.moe/@api/button/videos/'.$id.'" width="100%" height="90" allowtransparency="true" scrolling="no" style="border:none"></iframe>
</p><br><br><br><br><br>
</center>
</div>
</div></div></div>';
}
include 'includes/footer.php';
?>
