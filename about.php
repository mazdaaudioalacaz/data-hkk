<?php 
include'includes/config.php';
$title='About Us - '.$sitename.' ';
$description='About US '.$sitedescription.' ';
$keywords='about us, '.$sitekeywords;
$ogimg='https://res.cloudinary.com/websmoe/image/upload/v1586102664/majanet/ogimages_wdtrqu.jpg';
$urlnya=$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
include'includes/header.php';
echo'<div class="lr blog-post" style="margin-top: 39px; min-height: 500px">
<div class="lr">
<h1 class="text-info" style="color:#E34234;">About US</h1>';
include 'ads/adstop.php'; 
echo '
<p class="text-muted">
'.$sitename.' is a fast Youtube video downloader service. Now download videos in all formats from Youtube using '.$sitename.' video downloader. Using '.$sitename.' you can download any type of videos from the Youtube
</p><br>
<p class="text-muted">
Using it you can search the videos also and can play them too before downloading. You can even search the episodes and movies and download them. Search results can the sorted on the basis of relevance, view count, title, rating and publish date. 
</p><br>
<p class="text-muted">
Now you can download songs, movies, episodes, trailers, clips or any Youtube video without visitng the Youtube site with hassle free controls and beautiful responsive UI. Currently It supports 55 formats of video downloads. 
</p><br>
<p class="text-muted">
'.$sitename.' provides Youtube video downloads in mp4, webm, m4a, 3gp and 3D formats which ranges from mobile friendly to HDTV resolution. It can download Vevo videos, age-restricted videos, region protected videos. It also supports new formats which recently Youtube rolled out. '.$sitename.' is based on super fast script which can handle a number of downloads simultaneously. So you will never any downloading speed issue. So enjoy downloading videos from Youtube using '.$sitename.' and showcase, watch and listen to the ocean of never ending digital video download stream.
</p>
</div>
</div>';
include 'ads/adsbelow.php'; 
echo '
</div>
</div>';
include 'includes/footer.php';
?>