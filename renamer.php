<?
ob_start();
$r=file('rename.txt');
foreach($r as $v)
{
	$v=trim($v);
	$ex=explode(';',$v);
	$v=trim($ex[0]);
	$ve=explode('_',$ex[1]);
	$ve[0]=trim($ve[0]);
	if(!file_exists($ve[0]))
	{
		mkdir($ve[0]);
	}
		
		    //[scheme] => https
    //[host] => cloud.hotlan.by
    //[path] => /tvseries/15e4d1625cf67f1ad743e558aa727011e6428c7d/7db53bbebbdbcdbba78f47910cc46e63:2020050712/720.mp4
	
	$url=parse_url($v);
	//print_r($url);
	
	//print_r(pathinfo($url['path']));
	
	    //[dirname] => /tvseries/15e4d1625cf67f1ad743e558aa727011e6428c7d/7db53bbebbdbcdbba78f47910cc46e63:2020050712
    //[basename] => 720.mp4
    //[extension] => mp4
    //[filename] => 720
	$p=pathinfo($url['path']);
	$path=trim(str_replace(':','',$p['dirname']));
	if(file_exists('down/'.$url['host'].$path.'/720.mp4'))
	{
	copy('down/'.$url['host'].$path.'/720.mp4',$ve[0].'/'.$ve[1].'.mp4');
	}
}
file_put_contents('RenamerLog.txt',ob_get_contents());
?>