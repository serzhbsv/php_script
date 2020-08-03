<?
function StringDecode($file,$string='')
{
	
	if(empty($string))
	{
		print "empty\r\n";
$style=file_get_contents(trim($file));
	}
	else
	{
		print "string\r\n";
		$style=$string;
	}
	
$style=trim($style);
$a='';
for($i=0; $i<=strlen($style)-1; $i++)
{
$a.=$style[$i+1].$style[$i+2];
$i=$i+2;
}
return hex2bin($a);
}
?>