<?php
function ChangeYTURLs($text) {
    $text = preg_replace('~
        # Match non-linked youtube URL in the wild. (Rev:20130823)
        https?://         # Required scheme. Either http or https.
        (?:[0-9A-Z-]+\.)? # Optional subdomain.
        (?:               # Group host alternatives.
          youtu\.be/      # Either youtu.be,
        | youtube         # or youtube.com or
          (?:-nocookie)?  # youtube-nocookie.com
          \.com           # followed by
          \S*             # Allow anything up to VIDEO_ID,
          [^\w\s-]       # but char before ID is non-ID char.
        )                 # End host alternatives.
        ([\w-]{11})      # $1: VIDEO_ID is exactly 11 chars.
        (?=[^\w-]|$)     # Assert next char is non-ID or EOS.
        (?!               # Assert URL is not pre-linked.
          [?=&+%\w.-]*    # Allow URL (query) remainder.
          (?:             # Group pre-linked alternatives.
            [\'"][^<>]*>  # Either inside a start tag,
          | </a>          # or inside <a> element text contents.
          )               # End recognized pre-linked alts.
        )                 # End negative lookahead assertion.
        [?=&+%\w.-]*        # Consume any URL (query) remainder.
        ~ix', 
        '<a href="https://nice-grass-0cec6ac10.3.azurestaticapps.net/watch/$1">https://nice-grass-0cec6ac10.3.azurestaticapps.net/watch/$1</a>',
        $text);
    return $text;
}

include 'includes/site.php';
include 'includes/config.php';
$id=''.$_GET['v'].'';
//block video
    $vidioe=isset($_GET['v'])?$_GET['v']:'video';
    $badWordList = file_get_contents("badvideos.txt",NULL);
    $badWordArray = explode("\n", $badWordList);
    function check_forbidden($forbiddennames, $stringtocheck) 
    {
    foreach ($forbiddennames as $name) {
        if (stripos($stringtocheck, $name) !== FALSE) {
                return true;
        }
    }
    }	
    if(check_forbidden($badWordArray, $vidioe)) {
        header('location:https://'.$url.'/contentblock');
    	die();
    } 	
    
$yf=ngegrab('https://www.googleapis.com/youtube/v3/videos?key='.$tokenkeys.'&part=snippet,contentDetails,statistics,topicDetails&id='.$_GET['v'].'');
$yf=json_decode($yf);
foreach ($yf->items as $item){
$name=$item->snippet->title;
$des = nl2br($item->snippet->description);
$date = csdate($item->snippet->publishedAt);
$chid = $item->snippet->channelId;
$chtitle = $item->snippet->channelTitle;
$ctd=$item->contentDetails;
$duration=format_time($ctd->duration);
$hd = $ctd->definition;
$st= $item->statistics;
$views = $st->viewCount;
$likes = $st->likeCount;
$dislikes = $st->dislikeCount;
$favoriteCount = $st->favoriteCount;
$cmnts = $st->commentCount;
$RatingTotal = (int)$likes + (int)$dislikes; $RatingPercent = ($RatingTotal > 0) ? round((((int)$likes - (int)$dislikes) / $RatingTotal) * 100, 2) : "0.00"; $star = (int)$RatingPercent - (int)1; $share = (int)$likes - (int)$dislikes; 
{$title='Download '.$name.' Mp3 & Mp4';}
$description='Download '.$name.' in Various Possible qualities, Download '.$name.' in Hd, Download '.$name.' in Mp4, Download '.$name.' in Webm, Download '.$name.' in 3gp, Download '.$name.' in Mp3, ';
$keywords=''.$name.' 3gp, '.$name.' Hd, '.$name.' Mp4, '.$name.' Webm, '.$name.' Flv, '.$name.'  Mp3, Indian, Pakistani, Bangali, Hollywood, Bollywood, Lollywood, Tik Tok, Whatsapp, Instagram, 3gp, Mp4, Hd';
$ogimg='https://i.ytimg.com/vi/'.$id.'/hqdefault.jpg';
$urlnya=$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
$tag=$name;
$tag=str_replace(" ",",", $tag);
$dtag=$des;
include 'includes/header.php';
echo '
<div class="row">
    <!--<div class="lr">
        <font color="#E34234"><h1>'.arzClear($name).'</h1></font>
    </div>-->
    <div class="col-md-8">
        <div class="cont">
            <div class="youtube-player" data-id="'.$id.'"></div>
            <div class="bottom-left"></div>
            <div class="top-left"></div>
            <div class="top-right">
                <span class="label label-success" style="border-radius:3px;">
                    <font size="3">HD</font>
                </span>
            </div>
            <div class="bottom-right"></div>
        </div>
        <div class="lr">
            <iframe src="https://nice-grass-0cec6ac10.3.azurestaticapps.net/player.php?id='.$id.'" frameborder="0" width=" 100%" height="40" allowfullscreen></iframe>
            <div style="color:#cacaca;">
                <i class="fa fa-star" aria-hidden="true"></i>Rating: '.$RatingPercent.'%<small>(by '.number_format($RatingTotal).' users)</small>- What think other users about this videos -<b>Excellent! Must Watch this Video</b>
                <p></p>
            </div>
            <div class="video-info" itemscope="" itemtype="https://schema.org/VideoObject">
                <div class="single-video-title box" style="padding: 15px;background: #3f3f48 none repeat scroll 0 0;border-radius: 2px;box-shadow: 0 0 11px #45454e;transition-duration: 0.4s;">
                    <div class="float-right stats" itemprop="aggregateRating" itemscope="" itemtype="https://schema.org/AggregateRating" style="max-height: 30px;text-align: -webkit-right;margin-top: -12px;">
                        <h6><font color="#accbf7">'.number_format($views).' <small>views</small> </font></h6>
                        <div class="ratingpercent" style="width:207px;">
                            <div style="height:5px; width:100%;margin-bottom: 5px;" class="progress">
                                <div class="progress-bar progress-bar-success" style="width: 98.103348171086%; background-color:#D02525;"></div>
                                <div class="progress-bar progress-bar-danger" style="width: 1.8966518289143%; background-color:#E4E4E4;"></div>
                            </div>
                            <font color="#32B92D">'.number_format($likes).' <small>Likes</small></font> &nbsp;
                            <font color="#ff2b15">'.number_format($dislikes).' <small>Dislikes</small></font>
                        </div>
                    </div><br>
                    <font color="#E34234"><h1><a href="#">'.arzClear($name).'</a></h1></font>
                    <font color="#3f3f48"><em itemprop="ratingValue">'.$RatingPercent.'%</em><em itemprop="bestRating">'.number_format($RatingTotal).'</em><em itemprop="ratingCount">'.number_format($views).'</em> reviews.</font>
                </div><br>
                <div class="single-video-author box" style="padding: 15px;background: #3f3f48 none repeat scroll 0 0;border-radius: 2px;box-shadow: 0 0 11px #45454e;transition-duration: 0.4s;">
                        <div class="float-right" style="max-height: 30px;float: right;">
                            <script src="https://apis.google.com/js/platform.js"></script>
                            <div class="g-ytsubscribe" data-channelid='.$chid.' data-layout="default" data-theme="dark" data-count="default"></div>
                        </div>
                        <p>
                            <a href="/user/'.$chid.'" alt="'.$chtitle.'" title="'.$chtitle.'">
                                <strong style="color: #e8e7ea;">'.$chtitle.'</strong>
                            </a> 
                        <span title="" data-placement="top" data-toggle="tooltip" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></span>
                        </p>
                        <br>';
                        ?>
                        <div class="detail">
                			<center>
                			<?php if($safelink == 'yes'){ ?>
                			<form method="post" action="<?php echo $link_safelink; ?>" target="_blank" style="float: right;" class="btn btn-danger">
                			<?php }else{ ?>
                			<form method="get" action="/dl/" target="_blank" style="float: right;" class="btn btn-danger">
                			<?php } ?>
                			<?php $id_en = base64_encode($id); ?>
                			<input type="hidden" name="get" value="<?php echo $id_en; ?>" />
                			<input type="submit" class="safelink" value="Download" style="background-color: #00ffff00;padding: 7px 12px;margin: -10px;border-radius: 5px;">
                			</form></center>
                		</div>
                		
                		<?php
                		echo '
                        <small style="color: #f9c9c1;">Published on '.$date.'</small> <br>
                        <small style="color: #f9c9c1;">Duration '.$duration.'</small><br>
                        <small style="color: #f9c9c1;">Comment '.number_format($cmnts).'</small>
                </div><br>';
                    include 'ads/adsdownload.php';
                    echo '
                <!--<div class="single-video-author box" style="padding: 15px;background: #3f3f48 none repeat scroll 0 0;border-radius: 2px;box-shadow: 0 0 11px #45454e;transition-duration: 0.4s;">
                    <strong style="color: #e8e7ea;">Download :</strong>
					<iframe src="https://api.webs.moe/@api/button/mp3/'.$id.'" width="100%" height="80" allowtransparency="true" scrolling="no" style="border:none"></iframe>
                    <iframe src="https://api.webs.moe/@api/button/videos/'.$id.'" width="100%" height="80" allowtransparency="true" scrolling="no" style="border:none"></iframe>
                </div><br>-->
                
                <div class="single-video-author box" style="padding: 15px;background: #3f3f48 none repeat scroll 0 0;border-radius: 2px;box-shadow: 0 0 11px #45454e;transition-duration: 0.4s;">
                    <div class="lr"><font style="font-weight:bold; color:#e8e7ea;"><i class="fa fa-info-circle" aria-hidden="true"></i> Description:</font>
                        <div style="overflow: hidden; height: 64px;color:#e8e7ea;" class="read" id="chartdiv">'.ChangeYTURLs($des).'
                        <br /> Thank you to Watch/Download ' . ucwords($name) . ' mp3
                        <br />if you like this Video then please share mp3 on
                        <br /> Facebook mad Whats App or any Social Network
                        <br /> its Help Us to make More Videos</div>
                        <t style="cursor:pointer; text-decoration: none;outline: medium none;height: 23px;color: #3366A4;line-height: 24px;background-color: #E8F0F6;padding: 0px 3px;border-radius: 2px;width: -moz-fit-content;display: inline-block;border: 1px solid #CEE5F6;" class "morelink" id="hide" onClick="changeHeight();">Read More</t>
                        <script>
                            function changeHeight() {
                                    document.getElementById(\'chartdiv\').style.height = "auto" }  $("#hide").click(function(){     $("t").hide(); });
                        </script>
                    </div>
                    <br/>
                </div><br>
                
            </div>
            <!--idhar tak-->
            <div class="col-sm-12">
                <div id="partnerss">
                    <center>
                    <div class="logo-image">
                    <img src="https://i.ytimg.com/vi/'.$id.'/1.jpg" alt="'.$name.'" title="'.$name.'"></div>
                    <div class="logo-image">
                    <img src="https://i.ytimg.com/vi/'.$id.'/2.jpg" alt="'.$id.'" title="'.$name.'"></div>
                    <div class="logo-image">
                    <img src="https://i.ytimg.com/vi/'.$id.'/3.jpg" alt="'.$name.'" title="'.$name.'"></div>
                    </center>
                </div>
            </div>
        </div>
    </div>';}
include 'relateds.php';
include 'includes/footer.php';
?>
<?php
echo'<style>
.vinfo{color:#f1f1f1;padding:6px 0px 6px 6px;margin:0px;line-height:20px;border-top:1px solid #222222;font-size:16px;}
.vinfo b{color:#e74c3c;}</style>';
?>