<?php
class dml_language extends Model{
	function dml_language(){
	parent::Model();
	}
	
	function language($field,$id){
	if(empty($field)):
	$field='indonesia';
	endif;
	$this->DB->field($field);
	$this->DB->from('language');
	$ids=count($id);
		for($a=0;$a<$ids;$a++):
		$idl.=$id[$a];
			if($a!=$ids-1):
			$idl.=' OR id=';
			endif;
		endfor;
	$this->DB->where('id='.$idl);
	$this->DB->select();
	return $this->DB->result();
	}

}
?>