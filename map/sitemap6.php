<?php
function arzLink($txt) {
$txt = preg_replace("/[^a-zA-Z0-9]/", " ", strtolower($txt));
$txt = implode('-',array_unique(explode(' ', trim($txt))));
$txt = str_replace('”', '', $txt);
$txt = str_replace('“', '', $txt);
$txt = str_replace(',', '', $txt);
$txt = str_replace('"', '', $txt);
$txt = str_replace("'", '', $txt);
$txt = str_replace('--', '-', $txt);
return $txt;}
error_reporting(0);
header('Content-type: text/xml; charset=utf-8');
echo '<?xml version="1.0" encoding="UTF-8"?>';
echo '<?xml-stylesheet href="//'.$_SERVER['HTTP_HOST'].'/sitemap.xsl" type="text/xsl"?>';
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
$filename = 'sitemap6.txt';
$urls = file($filename);
$filectime = filectime($filename);
$urls = array_map('trim',$urls);
$sitemap = array();
foreach($urls as $url) {
if ($url != '') {
$priority = '0.8';
$url='https://'.$_SERVER['HTTP_HOST'].'/video/'.arzLink($url);
$sitemap[] = array(
'loc' => $url,
'lastmod' => date('Y-m-d',$filectime),
'changefreq' => 'weekly',
'priority' => $priority,
);
}
}
echo "\n";
foreach ($sitemap as $link) {
echo "\t<url>\n";
echo "\t\t<loc>" . htmlentities($link['loc']) . "</loc>\n";
echo "\t\t<lastmod>{$link['lastmod']}</lastmod>\n";
echo "\t\t<changefreq>{$link['changefreq']}</changefreq>\n";
echo "\t\t<priority>{$link['priority']}</priority>\n";
echo "\t</url>\n";
}
echo'</urlset>';
?>