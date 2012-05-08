<?php
class Zip{
	function zipDest($dest,$create=0){
	if(!file_exists($dest) && $create=1 && is_dir($dest)==1):
        mkdir($dest,0777);
        endif;
        $this->dest=$dest;
	}
	
	function addFile($file){
	$this->addfile=$file;
	}
	
	function addDir($dir){
	$this->addDir=$dir;
	}
	
	function zipMe(){
	$zip=new ZipArchive;
        if(file_exists($this->dest)):
        $d=$zip->open($this->dest,ZIPARCHIVE::CREATE);
        else:
        $d=$zip->open($this->dest,ZIPARCHIVE::CREATE);
        endif;
	if($d === TRUE):
	$zip->addFile($this->addfile);
	$zip->addEmptyDir($this->addDir);
	$zip->close();
        else:
        echo 'gagal';
        endif;
	}
	
	function zipDir($dir){
	$op=opendir($dir);
	while($f=readdir($op)):
	if($f!='.' && $f!='..'):
		if(is_dir($dir.'/'.$f)):
		$this->addDir($dir.'/'.$f);
		$this->zipDir($dir.'/'.$f,$this->dest);
		else:
		$this->addFile($dir.'/'.$f);
		endif;
	endif;
	$this->zipMe();
	endwhile;
	}
	
	function unZip($file){
	$zip=new ZipArchive;
	$zip->open($file);
	$zip->extractTo($this->dest);
	$zip->close();
	}
}
?>