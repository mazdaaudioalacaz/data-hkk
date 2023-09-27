<?php
ob_start("compress_htmlcode");
function compress_htmlcode($codedata) 
{
$searchdata = array(
'/\>[^\S ]+/s', // remove whitespaces after tags
'/[^\S ]+\</s', // remove whitespaces before tags
//'/(\s)+/s' // remove multiple whitespace sequences
);
$replacedata = array('>','<','\\1');
$codedata = preg_replace($searchdata, $replacedata, $codedata);
return $codedata;
}
?>
<?php include'config.php';  
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title><?php echo $title;?></title>
<META NAME="googlebot" CONTENT="index, follow">
<META NAME="robots" CONTENT="index, follow"><meta name="description" content="<?php echo $description;?>" />
<meta name="keywords" content="<?php echo $keywords;?>">
<meta property='og:site_name' content='<?php echo $title; ?>'/>
<meta property='og:type' content='website'/>
<meta property='og:url' content='https://<?php echo $urlnya;?>' />
<meta property='og:image' content='<?php echo $ogimg; ?>' />
<meta property='og:image:width' content='300' />
<meta property='og:image:height' content='100' />
<meta property='og:title' content='<?php echo $title; ?>'/>
<meta property='og:description' content='<?php echo $description; ?>'/>
<meta property='og:locale' content='en_US' />
<meta name='twitter:site' content='<?php echo $title; ?>' />
<meta name='twitter:creator' content='<?php echo $title; ?>' />
<meta name='twitter:image' content='<?php echo $ogimg; ?>' />
<meta name='twitter:card' content='summary_large_image'/>
<meta name='twitter:title' content='<?php echo $title; ?>'/>
<meta name='twitter:description' content='<?php echo $description; ?>'/>
<meta name="language" content="en"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link rel="apple-touch-icon" sizes="57x57" href="https://<?php echo $url;?>/favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="https://<?php echo $url;?>/favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="https://<?php echo $url;?>/favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="https://<?php echo $url;?>/favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="https://<?php echo $url;?>/favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="https://<?php echo $url;?>/favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="https://<?php echo $url;?>/favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="https://<?php echo $url;?>/favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="https://<?php echo $url;?>/favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="https://<?php echo $url;?>/favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="https://<?php echo $url;?>/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="https://<?php echo $url;?>/favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="https://<?php echo $url;?>/favicon/favicon-16x16.png">
<link rel="manifest" href="https://<?php echo $url;?>/favicon/manifest.json">
<meta name="msapplication-TileColor" content="#1e272e">
<meta name="theme-color" content="#1e272e">
<meta name="msapplication-TileImage" content="https://<?php echo $url;?>/favicon/ms-icon-144x144.png">
<link rel="shortcut icon" href="https://<?php echo $url;?>/favicon/favicon.ico" type="image/x-icon"/>
<meta name="robots" content="index,follow"/>
<meta name="googlebot" content="NOODP"/>
<link rel="canonical" href="<?php echo $site_url;?>"/>
<meta name="Distribution" content="Global"/>
<meta content="document" name="resource-type"/>
<meta content="all" name="audience"/>
<meta name="Rating" content="General"/>
<meta name="spiders" content="all" />
<meta name="googlebot" content="All, index, follow" />
<meta name="robots" content="All, index, follow" />
<meta name="msnbot" content="All, index, follow" />
<meta content="follow, all" name="robots" />
<meta content="follow, all" name="seznambot" />
<meta content="follow, all" name="Slurp" />
<meta content="follow, all" name="ia_archiver" />
<meta content="follow, all" name="Baiduspider" />
<meta content="follow, all" name="BecomeBot" />
<meta content="follow, all" name="Bingbot" />
<meta content="follow, all" name="btbot" />
<meta content="follow, all" name="Dotbot" />
<meta content="follow, all" name="Yeti" />
<meta content="follow, all" name="Teoma" />
<meta content="follow, all" name="Yandex" />
<meta content="follow, all" name="FAST-WebCrawler" />
<meta content="follow, all" name="FindLinks" />
<meta content="follow, all" name="FyberSpider" />
<meta content="follow, all" name="008" />
<meta content="index" name="googlebot"/>
<meta content="snippet" name="googlebot-news"/>
<meta content="index" name="googlebot-news"/>
<meta content="index" name="Googlebot-Image"/>
<meta content="index" name="Googlebot-Video"/>
<meta content="index" name="Googlebot-Mobile"/>
<meta content="index" name="Mediapartners-Google"/>
<meta content="index" name="AdsBot-Google"/>
<meta content="id" name="language"/>
<meta content="id" name="geo.country"/>
<meta content="Indonesia" name="geo.placename"/>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="https://<?php echo $url;?>/youtube.js"></script>
<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha256-bZLfwXAP04zRMK2BjiO8iu9pf4FbLqX6zitd+tIvLhE=" crossorigin="anonymous" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
<link href="https://<?php echo $url;?>/style.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script>$(window).load(function(){
$('.loader').fadeOut();
});</script>
<?php include'ads/adspopup.php';  
?>
</head>
<body>
<!--<div class="loader"></div>-->
<div class="wrapper">
<!-- Sidebar Holder -->
<nav id="sidebar">
<div class="sidebar-header">
<a href="/">
<img class="img-fluid" src="https://res.cloudinary.com/websmoe/image/upload/v1586245772/majanet/logo-min_tgnvam.png" alt="<?php echo $sitename;?>" width="210" height="auto">
</a>
</div>
<ul class="list-unstyled components">
<center>
<div class= "lr">
<form action="/search.php" method="get" id="searchform" class="navbar-frm">
    <div class="input-group col-md-12">
        <span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span>
        <input type="text" class="search-query search form-control " required="required" id="autoinput" autocomplete="off" title=""id="txt-url" name="q" placeholder="Enter keyword..."/>
        <span class="input-group-btn">
            <button type="submit" value="Search" id="btn-submit" class="btn btn-default">
                <span class="hidden-xs"></span>
                <i class="fa fa-search" aria-hidden="true"></i>
            </button>
        </span>
    </div>
</form>
<ul class="reset autocomplete"></ul>
<p>
</center>
<li class="#">
    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">
    <i class="fab fa-youtube"></i> Top channels</a>
    <ul class="collapse list-unstyled" id="homeSubmenu">
        <li><a href="/user/UCOP-gP2WgKUKfFBMnkR3iaA">Movie Trailers</a></li>
        <li><a href="/user/UC-lHJZR3Gqxm24_Vd_AJ5Yw">Pew Die Pie</a></li>
        <li><a href="/user/UC8wXC0ZCfGt3HaVLy_fdTQw">Digital Trends</a></li>
    </ul>
</li>
<li>
    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">
    <i class="fas fa-folder"></i> Category</a>
    <ul class="collapse list-unstyled" id="pageSubmenu">
    <?php include 'cats.php'; ?>
</ul>
</li>
<li><a href="/music"><i class="fas fa-music"></i> Music Trends</a></li>
<li><a href="/songs"><i class="fas fa-signal"></i> Top Songs</a></li>
<li><a href="/albums"><i class="fas fa-image"></i> Top Albums</a></li>
<li><a href="/hottracks"><i class="fas fa-star"></i> Hot Tracks</a></li>
<li><a href="/recentreleases"><i class="fas fa-tags"></i> Recent Releases</a></li>
<!--<div class= "bord"></div>-->
<li class="#">
    <a href="#aboutSubmenu" data-toggle="collapse" aria-expanded="false">
    <i class="fas fa-shield-alt"></i> <?php echo $sitename; ?></a>
    <ul class="collapse list-unstyled" id="aboutSubmenu">
        <li><a href="/about-us"><i class="fas fa-shield-alt"></i> About Us</a></li>
        <li><a href="/terms-of-service"><i class="fas fa-shield-alt"></i> Terms of Service</a></li>
        <li><a href="/privacy-policy"><i class="fas fa-sun"></i> Privacy Policy</a></li>
        <li><a href="/contact-us"><i class="fas fa-envelope"></i> Contact</a></li>
    </ul>
</li>
</ul>
</nav>

<div id="content">
<div class= "visible-xs visible-sm" style="text-align: center;">
<a href="/"><img class="img-fluid" src="https://res.cloudinary.com/websmoe/image/upload/v1586245772/majanet/logo-min_tgnvam.png" alt="<?php echo $sitename;?>" width="210" height="auto"></a>
<a id="sidebarCollapse" class=" btn btn-success btn-sm btn-block">
<i class="fas fa-bars"></i> Menu
</a>
<p>
<form action="/search.php" method="get" id="searchform" class="navbar-frm">
<div class="input-group">
<span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span>
<input type="text" class="search-query search form-control" required="required" id="youtube" autocomplete="off" title=""id="txt-url" name="q" placeholder="Enter keyword..."/>
<span class="input-group-btn">
<button type="submit" value="Search" id="btn-submit" class="btn btn-info">
<span class="hidden-xs"></span>
<i class="fa fa-search fa-lg" aria-hidden="true"></i>
</button>
</span>
</div>
</form>
<script>
$("#youtube").autocomplete({source:function(request,response){var query=request.term;$.ajax({url:"https://<?php echo $url;?>/includes/autocomplete.php?q="+query,dataType:'jsonp',success:function(data,textStatus,request){response($.map(data[1],function(item){return{label:item[0],value:item[0]}}))}})},select:function(event,ui){window.location.href='https://<?php echo $url;?>/search/'+encodeURI(ui.item.value).replace(/%20/g,'-')}})
</script>
<br>
</div>