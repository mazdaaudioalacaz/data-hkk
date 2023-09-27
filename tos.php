<?php 
include'includes/config.php';
$title='Terms of Service - '.$sitename.' ';
$description='Terms of Service '.$sitedescription.' ';
$keywords='tos, '.$sitekeywords;
$ogimg='https://res.cloudinary.com/websmoe/image/upload/v1586102664/majanet/ogimages_wdtrqu.jpg';
$urlnya=$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
include'includes/header.php';
echo'<div class="lr blog-post" style="margin-top: 39px; min-height: 500px">
<div class="lr">
<h1 style="color:#E34234;">Terms of Service</h1>';
include 'ads/adstop.php'; 
echo '
<p>Kindly Read our Terms of Service carefully,</p>
<p>'.$sitename.' Site/Client and any other linked services must only be used for private purposes. Any commercial use of '.$sitename.' is strictly forbidden and will be pursued in a court of law. It is the only purpose of '.$sitename.' to create a copy of downloadable online-content for the private use of the user ("fair use"). Any further use of the content transmitted by '.$sitename.', particularly but not exclusively making the content publicly accessible or using it commercially, must be agreed upon with the holder of the rights of the respective downloaded content. The user bears full responsibility for all actions related to the data transmitted by '.$sitename.' <br> '.$sitename.' does not grant any rights to the contents, as it only acts as a technical service provider.
The Site/Client or the apps in the Site/Client, may contain links to third party websites or clients("Linked Sites/Client").The Linked Sites/Client are not under our control and we are not responsible for any Linked Site, including any content contained in a Linked Site or any changes or updates to a Linked Site. We provide links to you only as a convenience, and the inclusion of any link does not imply our endorsement of the site or any association with its operators. The user carries full responsibility for checking the legitimacy of his use of  '.$sitename.'.<br>  '.$sitename.' only provides the technical service. Hence, '.$sitename.' does not take liability towards the user or any third party for the permissibility of downloading content through '.$sitename.'.
You represent and warrant to us that: (A) you are an individual (i.e., not a corporation) and you are of legal age to form a binding contract or have your parent’s permission to do so, and you are at least 13 years or age or older; (B) all registration information you submit is accurate and truthful; and (C) you will maintain the accuracy of such information. You also certify that you are legally permitted to use and access the services and take full responsibility for the selection and use of and access to the services. This agreement is void where prohibited by law, and the right to access the services is revoked in such jurisdictions.</p><p class="text-muted">If you have any questions, complaints, or claims with respect to the Services, you may contact us at please Email us '.$email.'</p>
</div></div>';
include 'ads/adsbelow.php'; 
echo '</div></div>';
include 'includes/footer.php';
?>