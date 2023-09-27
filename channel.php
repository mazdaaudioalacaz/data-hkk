<?php
include 'includes/site.php';
include 'includes/config.php';
if($_GET['id'])
{
$id = $_GET['id'];
} 
$qu=$q;
$qu=str_replace(" "," ", $qu);
$qu=str_replace("-"," ", $qu);
$qu=str_replace("_"," ", $qu); 
if(strlen($_GET['page']) >1){
$yesPage=$_GET['page'];}
else{
$yesPage='';}
$grab = ngegrab('https://www.googleapis.com/youtube/v3/search?part=snippet&order=relevance&regionCode=lk&key='.$tokenkeys.'&channelId='.$id.'&maxResults='.$maxr.'&pageToken='.$yesPage.'&type=video');
$json = json_decode($grab);
if($json){
foreach ($json->items as $hasil){
$channel = $hasil->snippet->channelTitle;}
$title = ''.$channel.' Channel 3gp, Mp4 Hd Videos - '.$sitename.'';
$description='Here You Can Stream and Download All Videos From '.$channel.' ';
$keywords=''.$channel.' 3gp videos, '.$channel.'  Hd videos ,'.$channel.'  Mp4 Videos , '.$channel.'  Webm, '.$channel.'  Flv, Indian, Pakistani, Bangali, Hollywood, Bollywood, Lollywood, Tik Tok, Whatsapp, Instagram, 3gp, Mp4, Hd';
$ogimg='https://res.cloudinary.com/websmoe/image/upload/v1586102664/majanet/ogimages_wdtrqu.jpg';
$urlnya=$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
include 'includes/header.php';
echo '<div class="lr">
<h1 class="hero-header">
<font color="#E9685D">'.$channel.'  Videos</font>
</h1>
</div>';
include 'ads/adstop.php'; 
echo '
<div class="row">';
}
$json = json_decode($grab);
$nextpage=$json->nextPageToken;
$prevpage=$json->prevPageToken;
if($json){
foreach ($json->items as $hasil){
$thumb       = $hasil->brandingSettings->image->bannerExternalUrl ;
$id          = $hasil->id->videoId;
$name        = $hasil->snippet->title;
$description = $hasil->snippet->description;
$channel     = $hasil->snippet->channelTitle;
$channelid   = $hasil->snippet->channelId;
$date     = time_elapsed_string($hasil->snippet->publishedAt);
$hasil       = ngegrab('https://www.googleapis.com/youtube/v3/videos?key='.$tokenkeys.'&part=contentDetails,statistics&id='.$id.'');
$dt          = json_decode($hasil);
foreach ($dt->items as $dta){
$time        = $dta->contentDetails->duration;
$gplus       = $dta->contentDetails->googlePlusUserId;
$duration    = format_time($time);
$views       = $dta->statistics->viewCount;
$likes       = $dta->statistics->likeCount;
$dislikes    = $dta->statistics->dislikeCount;
}
echo '<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
<div style="border: 1px solid #1D1D25; border-top-right-radius: 10px; border-top-left-radius: 10px;background: #2E2E38; margin:7px;">
<a href="/watch/'.$id.'">
<div class="cont profile-img-container">
<img src="//i.ytimg.com/vi/'.$id.'/mqdefault.jpg" alt="'.$name.'" style="border-top-right-radius: 10px; border-top-left-radius: 10px; width:100%;height:auto;">
<div class="profile-img-i-container">
<i class="far fa-play-circle fa-5x"></i>
</div>
<div class="bottom-left">
</div>
<div class="top-left"></div>
<div class="top-right"><span class="label label-success" style="border-radius:20px;">HD</span></div>
<div class="bottom-right"></div>
</div>
<div style="height:75px; font-size: 13px; padding: 6px;">
<font color="#C1C0C9">
<textt><b>'.$name.'</b></textt>
<p>
</font>
<font color="#738CAF">
<small style="float: right;font-size: 100%;"><tett>'.number_format($views).' view</tett></small>
<small style="font-size: 100%;"><tett>'.$date.'</tett></small>
</font>
</div></div></a></div>';
}
echo '
    <div class="lr clearfix" style="padding: 10px;">';
        if (strlen($prevpage)>1){
            if (strlen($_GET['id'])>1){
                echo '<div class="clearfix pull-left"><a href="/channel.php?id='.$_GET['id'].'&page='.$prevpage.'" class="btn btn-warning" title="Previous Page">&laquo; Prev</a></div>';
            }
        }
        if (strlen($nextpage)>1){
            if (strlen($_GET['id'])>1){
                echo '<div class="clearfix pull-right"><a href="/channel.php?id='.$_GET['id'].'&page='.$nextpage.'" class="btn btn-warning" title="Next Page">Next &raquo;</a></div>';
            }
            
        }
echo '
</div>
</div>';
include 'ads/adsbelow.php'; 
echo '
<br></div></div>';
}
include 'includes/footer.php';
?>