<?php
include 'includes/site.php';
include 'includes/config.php';
if($_GET['q']){
$q = $_GET['q'];
//block key
$query = strtolower($_GET['q']);
$query = str_replace("'", "", $query);
$query = preg_replace("/[^\p{L}\p{N}\s]/u", " ", $query);
$query = preg_replace('!\s+!', ' ', $query);
$query_display = $query;
$query_youtube = urlencode($query_display);
$badWordList = file_get_contents("badwords.txt",NULL);
$badWordArray = explode("\n", $badWordList);
function check_forbidden($forbiddennames, $stringtocheck) 
{
foreach ($forbiddennames as $name) {
    if (stripos($stringtocheck, $name) !== FALSE) {
            return true;
    }
}
}	
if(check_forbidden($badWordArray, $query_display)) {
    header('location:https://'.$url.'/contentblock');
	die();
} 	


$q=str_replace("-"," ", $q);} 
else {
$a = array("New songs", "New movies", "Movies", "pop songs", "Remix songs", "Hd songs", "upcoming songs", "upcoming movies", "Punjabi movies", "punjabi songs", "pak songs", "game", "sports", "tech", "info", "news", "technology", "computer");
$b = count($a)-1;
$q = $a[rand(0,$b)];}
$title =''. arzClear($q) .' 3gp Mp4 Hd videos - '.$sitename.'';
$description=''.$q.' 3gp Download, '.$q.' Mp4 Download, '.$q.' Hd Download, Download '.$q.' in Hd, Mp4, 3gp and Mp3';
$keywords=''.$q.' 3gp, '.$q.' Hd, '.$q.' Mp4, '.$q.' Webm, '.$q.' Flv, '.$q.' Indian, '.$q.' Pakistani, '.$q.' Bangali, '.$q.' Hollywood, '.$q.' Bollywood, Lollywood, Tik Tok, Whatsapp, Instagram, 3gp, Mp4, Hd, '.$q.'';
$ogimg='https://res.cloudinary.com/websmoe/image/upload/v1586102664/majanet/ogimages_wdtrqu.jpg';
$urlnya=$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
include 'includes/header.php';
if(!empty($_GET['q'])){
echo'<div class="lr">
<h1 class="hero-header">
<font color="#C0BEC8">'.$searcht.' '. arzClear($q) .' Videos</font>
</h1>
</div>
<div class="row">';}
else{
echo'<div class="lr">
<h1 class="hero-header">
<font color="#C0BEC8">'.$searcht.' '. arzClear($q) .' Videos</font>
</h1>
</div>';
include 'ads/adstop.php'; 
echo '
<div class="row">';}
$qu=$q;
$qu=str_replace(" ","+", $qu);
$qu=str_replace("-","+", $qu);
$qu=str_replace("_","+", $qu); if(strlen($_GET['page']) >1){$yesPage=$_GET['page'];}
else{$yesPage='';}
$grab=ngegrab('https://www.googleapis.com/youtube/v3/search?key='.$tokenkeys.'&part=snippet&order=relevance&maxResults='.$maxr.'&q='.$qu.'&pageToken='.$yesPage.'&type=video');
$json = json_decode($grab);
$nextpage=$json->nextPageToken;
$prevpage=$json->prevPageToken;
foreach ($json->items as $sam){
$id= $sam->id->videoId;
$name= $sam->snippet->title;
$desc = $sam->snippet->description;
$chtitle = $sam->snippet->channelTitle;
$chid = $sam->snippet->channelId;
$date = dateyt($sam->snippet->publishedAt);
echo '
    <div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
        <div style="border: 1px solid #1D1D25; border-top-right-radius: 5px; border-top-left-radius: 5px;background: #2E2E38; margin:7px;">
            <a href="/watch/'.$id.'" alt="'.$name.'" title="'.$name.'">
                <div class="cont profile-img-container">
                    <img class="img-fluid" src="https://i.ytimg.com/vi/'.$id.'/mqdefault.jpg" alt="'.$name.'" style="border-top-right-radius: 5px; border-top-left-radius: 5px; width:100%;height:auto;">
                    <div class="profile-img-i-container">
                        <i class="far fa-play-circle fa-5x"></i>
                    </div>
                    <div class="bottom-left"></div>
                    <div class="top-left"></div>
                    <div class="top-right"><span class="label label-success" style="border-radius:20px;">HD</span></div>
                    <div class="bottom-right"></div>
                </div>
            </a>
            <div style="height:88px; font-size: 13px; padding: 6px;">
                <a href="/watch/'.$id.'" alt="'.$name.'" title="'.$name.'">
                    <font color="#C1C0C9">
                        <textt><b>'.$name.'</b></textt>
                    </font>
                </a>
                <font color="#738CAF">
                    <small style="font-size: 100%;"><tett>'.time_elapsed_string($date).'</tett></small>
                    <a href="/user/'.$chid.'" alt="'.$chtitle.'" title="'.$chtitle.'">
                        <small style="font-size: 100%;"><tett><b>'.$chtitle.'</b></tett></small>
                    </a>
                </font>
            </div>
        </div>
    </div>';
}
echo'
    <div class="lr clearfix" style="padding: 10px;">';
        if (strlen($prevpage)>1){if (strlen($_GET['q'])>1){
            echo'
            <div class="clearfix pull-left"><a href="/video/'.$_GET['q'].'/'.$prevpage.'" class="btn btn-warning" title="Previous Page">&laquo; Prev</a></div>';
        }
        else{
            echo'<div class="clearfix pull-left"><a href="/video/'.$prevpage.'" class="btn btn-warning" title="Previous Page">&laquo; Prev</a></div>';
        }}
        if (strlen($nextpage)>1){if (strlen($_GET['q'])>1){
            echo'
            <div class="clearfix pull-right"><a href="/video/'.$_GET['q'].'/'.$nextpage.'" class="btn btn-warning" title="Next Page">Next &raquo;</a></div>';
        }
        else{
            echo'
            <div class="clearfix pull-right"><a href="/video/'.$nextpage.'" class="btn btn-warning" title="Next Page">Next &raquo;</a></div>';
        }}
    echo'
    </div>';
include 'ads/adsbelow.php';
include 'includes/footer.php';
?>