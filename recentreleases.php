<?php 
include 'includes/site.php';
include 'includes/config.php';
$title='Recent Releases - '.$sitedes.'';
$description='Download Recent Releases in Various Possible qualities, Download Recent Releases in Hd, Download Recent Releases in Mp4, Download Recent Releases in Webm, Download Recent Releases in 3gp, Download Recent Releases in Mp3, ';
$keywords='Recent Releases 3gp, Recent Releases Hd, Recent Releases Mp4, Recent Releases Webm, Recent Releases Flv, Recent Releases  Mp3, Indian, Pakistani, Bangali, Hollywood, Bollywood, Lollywood, Tik Tok, Whatsapp, Instagram, 3gp, Mp4, Hd';
$ogimg='https://res.cloudinary.com/websmoe/image/upload/v1586122443/majanet/rimages_h3rfpk.jpg';
$urlnya=$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
include'includes/header.php';
echo'
<div class="lr">
    <h1 class="hero-header">
        <font color="#E9685D">Recent Releases</font>
    </h1>';
    require_once 'select_gl.php'; 
    echo '
</div>';
include 'ads/adstop.php'; 
echo '
<div class="row">';
$string = file_get_contents('https://rss.itunes.apple.com/api/v1/'.$gl.'/itunes-music/recent-releases/all/60/explicit.json');
$json = json_decode($string);
$rssresults = '';
$nilai = 0;
foreach ($json->feed->results as $item) {
    // ssl images
	$sslimage = preg_replace('~http://(.*?).mzstatic~', "https://$1-ssl.mzstatic", $item->artworkUrl100);
	$bigimage = preg_replace('/200x200/ms', "180x180", $sslimage);
    
    $search_link = strtolower($item->name);//.'-'.strtolower($item->artistName);
    $search_link = arzLink($search_link);
	$nilai = $nilai+1 ;
    $rssresults .= '
	<div class="col-xs-6 col-sm-6 col-md-4 col-lg-2">
		<div style=" border: 1px solid #1D1D25; border-top-right-radius: 5px; border-top-left-radius: 5px;background: #2E2E38; margin:7px;">
			<a href="/recentreleases/'.$search_link.'" alt="'.$item->name.' - '.$item->artistName.'" title="'.$item->name.' - '.$item->artistName.'">
				<div class="cont profile-img-container">
					<img src="'.$bigimage.'" alt="'.$item->name.' - '.$item->artistName.'" title="'.$item->name.' - '.$item->artistName.'"style="border-top-right-radius: 5px; border-top-left-radius: 5px; width:100%;height:170px;">
					<div class="profile-img-i-container">
						<i class="far fa-play-circle fa-5x"></i>
					</div>
					<div class="bottom-left">
						<div class="blackk">
							<font size="2"> '.$nilai.'</font>
						</div>
					</div>
					<div class="top-left"></div>
					<div class="top-right"></div>
					<div class="bottom-right"></div>
				</div>
				<div style = "height:68px; font-size: 13px; padding: 6px;text-align: center;">
					<font color="#C1C0C9">
					<textt>
						<b>'.arzClear($item->name).' '.arzClear($item->artistName).'</b>
					</textt>
					</font>
				</div>
			</a>
		</div>
	</div>
';
}
echo $rssresults;
include 'ads/adsbelow.php';
echo'
</div></div>';
include 'includes/footer.php';
?>