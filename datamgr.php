<?php

if($_REQUEST["mode"] && $_REQUEST["mode"]=="set")
{
	$filename = "./data/" . $_REQUEST["filename"];
	$filecontent = $_REQUEST["filecontent"];
	$handle = fopen($filename,'w');
	fwrite($handle,$filecontent);
	fclose($handle);
	echo '{"result":0}';
}
else if($_REQUEST["mode"] && $_REQUEST["mode"]=="get")
{
	$filename = "./data/" . $_REQUEST["filename"];
	$handle = fopen($filename, "r");
	$filecontent = fgets($handle, 102400);
	fclose($handle);
	echo stripslashes($filecontent);
}
else if($_REQUEST["mode"] && $_REQUEST["mode"]=="getlist")
{
	$filelist = get_file_list("./data");
	echo json_encode($filelist);
}

function get_file_list($path){
	$handler = opendir($path);
	$rt = array();
	if($handler){
		while($file = readdir($handler)){
			if($file == '.' || $file == '..')
				continue;
			if(is_file($path . "/" . $file))
				$rt[] = $file;
		}
	}
	return $rt;
}
?>