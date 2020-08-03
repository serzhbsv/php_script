<?

include 'ob.php';

$f1=file('player.html');

foreach($arr[1] as $k=>$v)
{

$m3u.='#EXTINF:0,'.$k.'.720.mp4'."\r\n".'#EXTVLCOPT:network-caching=10000'."\r\n".$v."\r\n";

}
save($m3u,'index.m3u');

?>