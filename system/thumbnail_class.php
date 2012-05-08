<?php
class image_thumbnail
{
	function size_thumbnail($width=100,$height=150)
	{
	$this->width_thumbnail=$width;
	$this->height_thumbnail=$height;
	}
		function image_source($source)
		{
		$this->image_source=$source;
		list($this->source_width,$this->source_height)=getimagesize($source);
		if($this->source_width < $this->width_thumbnail || $this->source_height < $this->height_thumbnail)
		{
		$this->width_thumbnail=$this->source_width;
		$this->height_thumbnail=$this->source_height;
		}
		$src_ext=pathinfo($source);
		$get_ext=$src_ext['extension'];
			if($get_ext=='jpeg' || $get_ext=='jpg' || $get_ext=='JPG')
			{
			$from="imagecreatefromjpeg";
			$img="imagejpeg";
			$head="jpeg";
			}
				else
				{
				$from="imagecreatefrom$get_ext";
				$img="image$get_ext";
				$head=$get_ext;
				}
					
header("content-type: image/$head");
$thumb=imagecreatetruecolor($this->width_thumbnail,$this->height_thumbnail);
$source=$from($this->image_source);
imagecopyresized($thumb,$source,0,0,0,0,$this->width_thumbnail,$this->height_thumbnail,$this->source_width,$this->source_height);
	$img($thumb);
	}	
}
?>
<?php
/*
	$size=list($lebar,$tinggi)=getimagesize($gambar);
	header('Content-type: image/jpeg');
	$jempol=imagecreatetruecolor(150,200);
	$sumber=imagecreatefromjpeg($gambar);
	imagecopyresized($jempol,$sumber,0,0,0,0,150,200,$lebar,$tinggi);
	imagejpeg($jempol);
*/
?>