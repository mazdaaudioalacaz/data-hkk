<?php
error_reporting(0);
function ngegrab($url){
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$uaa = $_SERVER['HTTP_USER_AGENT'];
curl_setopt($ch, CURLOPT_USERAGENT, "User-Agent: $uaa");
return curl_exec($ch);}
function samgrab($url){$ch = curl_init(); curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
curl_setopt($ch,CURLOPT_ENCODING,'gzip');
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, '1');
curl_setopt($ch, CURLOPT_TIMEOUT, 10);
$header[] = "Accept-Language: en";
$header[] = "User-Agent: Mozilla/5.0 (Windows; U; Windows NT 6.0; de; rv:1.9.2.3) Gecko/20100401 Firefox/3.6.3";
$header[] = "Pragma: no-cache";
$header[] = "Cache-Control: no-cache";
$header[] = "Accept-Encoding: gzip,deflate";
$header[] = "Content-Encoding: gzip";
$header[] = "Content-Encoding: deflate";
curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
$load = curl_exec($ch);
curl_close($ch);
return $load;}
$devkey='QUl6YVN5QS1kbEJValZRZXVjNGE2Wk40UmtOVVlERmRkclZMeHJB';
function sam($content,$start,$end){
if($content && $start && $end) {
$r = explode($start, $content);
if (isset($r[1])){
$r = explode($end, $r[1]);
return $r[0];}
return '';}}
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
function arzClear($value){
$value = ucwords(str_replace('-', ' ', $value));
$value = ucwords(str_replace('_', ' ', $value));
$value = ucwords(str_replace('#', ' ', $value));
$value = ucwords(str_replace('/', ' ', $value));
$value = ucwords(str_replace('%', ' ', $value));
$value = str_replace('  ', ' ', $value);
return $value;}
function format_time($t) {
$sam = str_replace('PT','',$t);
$sam = str_replace('H',' Hours ',$sam);
$sam = str_replace('M',' мιиυтєѕ αиd ',$sam);
$sam = str_replace('S',' ѕє¢σиdѕ ',$sam);
return $sam;}
function write_to_file($q)
{$filename = 'sitemap.txt';
$fh = fopen($filename, "a");
if(flock($fh, LOCK_EX))
{fwrite($fh, $q);
flock($fh, LOCK_UN);}
fclose($fh);}
function dateyt($date){
$sam = str_replace('T',' ',$date);
$sam = str_replace('.000Z','',$sam);
return $sam;}
function covtime($youtube_time){
$start = new DateTime('@0'); // Unix epoch
$start->add(new DateInterval($youtube_time));
return $start->format('H:i:s');} 
function name($string){
$string = preg_replace('/[^a-zA-Z0-9_ %\[\]\.\(\)%&-]/s', '', $string);
$string = preg_replace('/[\s-]+/', ' ', $string);
$string = preg_replace('/[\s_]/', '-', $string);
return $string;}
function csdate($date){
$date = substr($date,0,10); 
$date = explode('-',$date);
$mn   = date('F',mktime(0,0,0,$date[1])); 
$dates= ''.$date[2].' '.$mn.' '.$date[0].''; 
return $dates;}
$tokenkeys=base64_decode($devkey);
function time_elapsed_string($datetime, $full = false){
$now = new DateTime;
$ago = new DateTime($datetime);
$diff = $now->diff($ago);
$diff->w = floor($diff->d / 7);
$diff->d -= $diff->w * 7;
$string = array(
'y' => 'year',
'm' => 'month',
'w' => 'week',
'd' => 'day',
'h' => 'hour',
'i' => 'minute',
's' => 'second',
);
foreach ($string as $k => &$v){
if ($diff->$k){
$v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');}
else{
unset($string[$k]);}
}
if (!$full) $string = array_slice($string, 0, 1);
return $string ? implode(', ', $string) . ' ago' : 'just now';}
?>
