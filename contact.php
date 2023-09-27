<?php 
include'includes/config.php';
$title='Contact Us - '.$sitename.' ';
$description='Contact US '.$sitedescription.' ';
$keywords='contact us, '.$sitekeywords;
$ogimg='https://res.cloudinary.com/websmoe/image/upload/v1586102664/majanet/ogimages_wdtrqu.jpg';
$urlnya=$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
include'includes/header.php';
echo'<div class="lr blog-post" style="margin-top: 39px; min-height: 500px">
<div class="lr">
<h1 class="text-info" style="color:#E34234;">Contact US</h1>';
include 'ads/adstop.php'; 
echo '
<p class="text-muted">You Can Contact us on Social Media.
We are active on social media</p>
</div>
</div>';
include 'ads/adsbelow.php'; 
echo '
</div>
</div>';
include 'includes/footer.php';
?>