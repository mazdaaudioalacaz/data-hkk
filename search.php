<?php
include 'includes/site.php';
if(!empty($_GET['q']))
{
$url='/video/'. arzLink($_GET['q']) .'';
}
else
{
$url='/';
}
header('location:'.$url.''); 
?>