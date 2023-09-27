<?php
include 'includes/site.php';
include 'includes/config.php';
$title =''.$sitename.' - '.$sitedes.'';
$description=$sitedescription;
$keywords=$sitekeywords;
$ogimg='https://res.cloudinary.com/websmoe/image/upload/v1586102664/majanet/ogimages_wdtrqu.jpg';
$urlnya=$url;
include 'includes/header.php';
echo'
<div class="lr">
    <h1 class="hero-header">
    <font color="#E9685D">'.$homet.'</font>
    </h1>';
    require_once 'select_gl.php'; 
    echo '
</div>';
include 'ads/adstop.php'; 
echo '
<div class="row">';
    if(strlen($_GET['page']) >1){$yesPage=$_GET['page'];}
    else{$yesPage='';}
    $grab=ngegrab('https://www.googleapis.com/youtube/v3/videos?key='.$tokenkeys.'&part=snippet,contentDetails,statistics&chart=mostPopular&maxResults='.$maxr.'&regionCode='.$gl.'&pageToken='.$yesPage.'');
    $json = json_decode($grab);
    $nextpage=$json->nextPageToken;
    $prevpage=$json->prevPageToken;
    foreach ($json->items as $sam){
    $id= $sam->id;
    $name= $sam->snippet->title;
    $desc = $sam->snippet->description;
    $chtitle = $sam->snippet->channelTitle;
    $chid = $sam->snippet->channelId;
    $date = dateyt($sam->snippet->publishedAt);
    $kmtime = format_time($sam->contentDetails->duration);
    $definition = $sam->contentDetails->definition;
    $definition = str_replace ('hd', 'HD', $definition);
    $definition = str_replace ('sd', 'SD', $definition);
    $verify= $sam->contentDetails->licensedContent;
    $view = $sam->statistics->viewCount;
    $likeCount = $sam->statistics->likeCount;
    $dislikeCount = $sam->statistics->dislikeCount;
    $favoriteCount = $sam->statistics->favoriteCount;
    $commentCount = $sam->statistics->commentCount;
    echo '
    <div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
        <div style="border: 1px solid #1D1D25; border-top-right-radius: 10px; border-top-left-radius: 10px;background: #2E2E38; margin:7px;">
            <a href="/watch/'.$id.'" alt="'.$name.'" title="'.$name.'">
                <div class="cont profile-img-container">
                    <img class="img-fluid" src="https://i.ytimg.com/vi/'.$id.'/mqdefault.jpg" alt="'.$name.'" title="'.$name.'" style="border-top-right-radius: 10px; border-top-left-radius: 10px; width:100%;height:auto;">
                    <div class="profile-img-i-container">
                        <i class="far fa-play-circle fa-5x"></i>
                    </div>
                    <div class="bottom-left"></div>
                    <div class="top-left"></div>
                    <div class="top-right"><span class="label label-success" style="border-radius:20px;">'.$definition.'</span></div>
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
                    <small style="float: right;font-size: 100%;"><tett>'.number_format($view).' view</tett></small>
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
        if (strlen($prevpage)>1){
            echo'
            <div class="clearfix pull-left">
                <a href="/page/'.$prevpage.'" class="btn btn-warning" title="Previous Page">&laquo; Prev</a>
            </div>';
        }
        if (strlen($nextpage)>1){
            echo'
            <div class="clearfix pull-right">
                <a href="/page/'.$nextpage.'" class="btn btn-warning" title="Next Page">Next &raquo;</a>
            </div>';
        }
    echo'
    </div>
</div>';
include 'ads/adsbelow.php'; 
echo '
<br>
</div>
</div>';
include 'includes/footer.php';?>