<?php
class dml_general extends Model{
	function dml_general(){
	parent::Model();
	}

	function save($data,$table){
	return $this->DB->insert($data,$table);
	}
	
	function update($data,$table,$cond){
	return $this->DB->update($data,$table,$cond);
	}
	
	function delete($table,$con){
	$this->DB->where($con);
	return $this->DB->delete($table);
	}
}
?>