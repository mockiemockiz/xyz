<?php
class Upload{
	function filename($file){
	$this->file=$file;
	}
	
	function dest($dest){
	$this->dest=$dest;
	}
	
	function max_size($max=20000){
	$this->max_size=$max;
	}
	
	function allowed_type($type){
	$this->allowed_type=$type;
	}
	
	function uploadfile($random=0){
	$all=count($this->file['name']);
	for($e=0;$e<$all;$e++):
	if($random):
	$ext=end(explode('.',$this->file['name'][$e]));
	$name=rand(1,11111111).'.'.$ext;
	else:
	$name=$this->file['name'][$e];
	endif;
		if($this->file['name'][$e]!='' 
		   && in_array($this->file['type'][$e],$this->allowed_type) 
		   && $this->file['size'][$e] < $this->max_size):
		move_uploaded_file($this->file['tmp_name'][$e],$this->dest.'/'.$name);
		echo $this->file['name'][$e];
		endif;
	endfor;
	}
}
?>