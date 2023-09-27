<?php 
include 'includes/site.php';
include 'includes/config.php';
$title='Top Albums - '.$sitedes.'';
$description='Download Top Albums in Various Possible qualities, Download Top Albums in Hd, Download Top Albums in Mp4, Download Top Albums in Webm, Download Top Albums in 3gp, Download Top Albums in Mp3, ';
$keywords='Top Albums 3gp, Top Albums Hd, Top Albums Mp4, Top Albums Webm, Top Albums Flv, Top Albums  Mp3, Indian, Pakistani, Bangali, Hollywood, Bollywood, Lollywood, Tik Tok, Whatsapp, Instagram, 3gp, Mp4, Hd';
$ogimg='https://res.cloudinary.com/websmoe/image/upload/v1586120872/majanet/aimages_pae2w5.jpg';
$urlnya=$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
include'includes/header.php';
echo'
<div class="lr">
    <h1 class="hero-header">
        <font color="#E9685D">Top Albums</font>
    </h1>';
    require_once 'select_gl.php'; 
    echo '
</div>';
include 'ads/adstop.php'; 
echo '
<div class="row">';
$string = file_get_contents('https://itunes.apple.com/'.$gl.'/rss/topalbums/limit=72/explicit=true/json');
$imfix = preg_replace('/im:/ms', "im", $string);
$json = json_decode($imfix);
$rssresults = '';
$nilai = 0;
foreach ($json->feed->entry as $item) {
    // id url
	$musicid = $item->id->label;
	$musicid = explode('/',$musicid);
	$musicid = explode('?',$musicid[6]);
	// ssl images
	$sslimage = preg_replace('~http://(.*?).mzstatic~', "https://$1-ssl.mzstatic", $item->imimage[2]->label);
	$bigimage = preg_replace('/200x200/ms', "180x180", $sslimage);
    
    $search_link = strtolower($item->title->label);//.'-'.strtolower($item->imartist->label);
	$search_link = arzLink($search_link);
	$nilai = $nilai+1 ;
    $rssresults .= '
	<div class="col-xs-6 col-sm-6 col-md-4 col-lg-2">
		<div style=" border: 1px solid #1D1D25; border-top-right-radius: 5px; border-top-left-radius: 5px;background: #2E2E38; margin:7px;">
			<a href="/albums/'.$search_link.'" alt="'.$item->title->label.' - '.$item->imartist->label.'" title="'.$item->title->label.' - '.$item->imartist->label.'">
				<div class="cont profile-img-container">
					<img src="'.$bigimage.'" alt="'.$item->title->label.' - '.$item->imartist->label.'" title="'.$item->title->label.' - '.$item->imartist->label.'"style="border-top-right-radius: 5px; border-top-left-radius: 5px; width:100%;height:170px;">
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
						<b>'.arzClear($item->title->label).'</b>
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