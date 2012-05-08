<?php
class Paging{
function Load($pass='')
{
	$limit=$pass['limit'];
	$display_page=$pass['display_page'];
	$all=$pass['all'];
	$begin=$pass['begin'];
	$link=$pass['link'];
	$pageelement=$pass['page_elementAjax'];
	$display_link=$pass['display_link'];
	$misc=$pass['misc'];
	$limitpage=ceil($all/$limit);
	if($begin==''): 
	$start=1;
	$mulai=1;
	if(($mulai+$display_page)>$limitpage):
	$lim=$limitpage;
	else:
	$lim=$mulai+$display_page;
	endif;
	else: 
	$start=$begin;
	$mulai=$begin;
	if(($mulai+$display_page)>$limitpage):
	$lim=$limitpage;
	else:
	$lim=$mulai+$display_page;
	endif;
	endif;
	$offset=($start-1)*$limit;
	$a.='<ul id="paging">'."\n";
	if($display_link=='1'):
		for($i=1;$i<=$limitpage;$i++):
			if($i==$start):
				$a.='<li class="active" style="width:10px;">'."\n".$i."\n".'</li>'."\n";
			else:
				$a.='<li class="no_paging">'."\n".'<a href="'.main_path.$link.$i.'" id="link">'."\n".$i.'</a>'."\n".'</li>'."\n";
			endif;
		endfor;
	else:
		if($start>1): 
			$a.='<li class="no_paging">'."\n".'<a href="#" id="link" onclick="callAJAX(\''.$link.$i.'\',\''.$pageelement.'\');">'."\n".'Prev'."\n".'</a>'."\n".'</li>'."\n"; 
		endif;
	for($i=$mulai;$i<=$lim;$i++):
		if($i==$start):
			$class='active';
			$a.='<li class="'.$class.'">'.$i.'</li>'."\n";
		else:
			$class='no_paging';
			$a.='<li class="'.$class.'">'."\n".'<a href="#" id="link" onclick="callAJAX(\''.$link.$i.'\',\''.$pageelement.'\');">'."\n".$i.'</a>'."\n".'</li>'."\n";
		endif;
	endfor;	
	if($start!=$limitpage and ($start+1)!=$limitpage): $a.='<li class="no_paging">'."\n".'
	<a href="#" id="link"  
			onclick="callAJAX(\''.$link.$i.'\',\''.$pageelement.'\');">'."\n".'Next'."\n".'</a>'."\n".'</li>'."\n"; endif;
	endif;
	$a.='</ul>';
$as=array('limit' 	=> $limit,
		  'offset'  => $offset,
		  'start'	=> $start,
		  'all'		=> $all,
		  'paging' 	=> $a,
		  'link'	=> main_path.$link.$next);
return $as;
}
}
?>