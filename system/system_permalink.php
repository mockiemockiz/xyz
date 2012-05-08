<?php
function permalink($active='',$cid='',$aid=''){
if($active=='1'):
	if($cid!='' && $aid==''):
	$link=main_path.'/'.$cid.'.html';
	elseif($cid!='' && $aid!=''):
	$link=main_path.'/'.$cid.'/'.$aid.'.html';
	endif;
else:
	if($cid!='' && $aid==''):
	$link=main_path.'/index.php?cid='.$cid;
	elseif($cid!='' && $aid!=''):
	$link=main_path.'/index.php?cid='.$cid.'&aid='.$aid;
	endif;
endif;
return $link;
}
?>