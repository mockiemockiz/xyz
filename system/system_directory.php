<?php
class Dir{
	function read($dir){
	if(is_dir($dir)):
		if($op=opendir($dir)):
			while(($file=readdir($op))!==FALSE):
				if($file!='.'&& $file!='..'):
				$data[]=$file;
				endif;
			endwhile;
		endif;
	else:
		$data[]='this is not directory';
	endif;
	closedir($op);
	return $data;
	}

        function makedir($dir){
        foreach($dir as $value):
            if(is_array($value)):
                $this->makedir($value);
            else:
                echo $value.'<br />';
            endif;
        endforeach;
        }
}
?>