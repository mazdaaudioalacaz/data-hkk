<?php 
include'includes/config.php';
$title='Content Block - '.$sitename.' ';
$description='Content Block '.$sitedescription.' ';
$keywords='Content Block, '.$sitekeywords;
$ogimg='https://res.cloudinary.com/websmoe/image/upload/v1586102664/majanet/ogimages_wdtrqu.jpg';
$urlnya=$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
include'includes/header.php';
echo'<div class="lr blog-post" style="margin-top: 39px; min-height: 500px">
<div class="lr">
<h1 class="text-info" style="color:#E34234;">Content Block</h1>';
include 'ads/adstop.php'; 
echo '
<p class="text-muted" style="text-align: center;">
<img class="img-fluid mCS_img_loaded" src="https://majapahit.net/images/block.png" alt="MajaNet" width="45%" height="auto">
</p><br>
</div>
</div>';
include 'ads/adsbelow.php'; 
echo '
</div>
</div>';
include 'includes/footer.php';
?>