<?php 
include'includes/config.php';
$title='Privacy - '.$sitename.' ';
$description='Privacy '.$sitedescription.' ';
$keywords='privacy, '.$sitekeywords;
$ogimg='https://res.cloudinary.com/websmoe/image/upload/v1586102664/majanet/ogimages_wdtrqu.jpg';
$urlnya=$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
include'includes/header.php';
echo'<div class="lr blog-post" style="margin-top: 39px; min-height: 500px">
<div class="lr">
<h1 style="color:#E34234;">Privacy Policy</h1>';
include 'ads/adstop.php'; 
echo '<br>
<p>Privacy has become a major concern on the Internet. this website knows that you care how information about you is used and shared. This privacy statement describes how this website deals with your information. By visiting this website, you are accepting the practices described in this privacy statement.
<br><b class="text-info">Personal Information</b><br><br>
This website does not require you to disclose personal information anywhere on the site. Your IP address is used to gather broad demographic information and to track your general visiting patterns. Your IP address is also used to help diagnose technical problems. this website does not sell, rent, or trade your personal information with any third parties.
<br><b class="text-danger">Cookies</b><br><br>
Cookies are small text files that are used by many sites to store or transfer information between the main site and the computer you use to access the site. These cookies are stored in a special folder in your temporary internet files directory. this website uses cookies in parts of the website. In the course of serving advertisements to this site, our third-party advertiser may place or recognize a unique "cookie" on your browser.
<br><b class="text-warning">Advertisers</b><br><br>
We use third-party advertising companies to serve ads when you visit this website. These companies may use information about your visits to this and other websites in order to provide advertisements on this site and other sites about goods and services that may be of interest to you. The advertisements may contain cookies. The advertisements are necessary to finance the costs of keeping this site online.
<br><b class="text-success">Contact</b><br><br>
If you have any questions about this privacy statement, the practices of this site, or your dealings with this website, you are welcome to contact us.
</p>
</div></div>';
include 'ads/adsbelow.php'; 
echo '</div></div>';
include 'includes/footer.php';
?>