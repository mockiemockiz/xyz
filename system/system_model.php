<?php
class Model {
    public $CONFIG;
    function Model() {
        $this->DB = new B($this);
    }
}


class B {

function B(){
global $CONFIG;
$q=mysql_connect($CONFIG['HOST'],$CONFIG['USER'],$CONFIG['PASS']);
mysql_select_db($CONFIG['DB'],$q);
mysql_query("SET NAMES 'utf8'"); 
mysql_query('SET CHARACTER SET utf8'); 
}
		function field($field=''){
		$this->field=$field;
		}
		
		function from($from=''){
		$this->from=' ('.$from.') ';
		}
	
		function where($w=''){
		$this->where=' WHERE '.$w;
		}
		
		function left_join($w){
		if(is_array($w)):
		foreach($w as $key => $value):
		$this->left_join.=' LEFT JOIN ('.$key.') ON ('.$value.')';
		endforeach;
		else:
		$this->left_join=' LEFT JOIN ('.$w.')';
		endif;
		}
		
		function inner_join($w){
		if(is_array($w)):
		foreach($w as $key => $value):
		$this->left_join.=' INNER JOIN ('.$key.') ON ('.$value.')';
		endforeach;
		else:
		$this->inner_join=' INNER JOIN ('.$w.')';
		endif;
		}
		
		function right_join($w=''){
		$this->right_join=' RIGHT JOIN ('.$w.')';
		}
		
		function on($w=''){
		$this->on=' ON ('.$w.')';
		}

        function not_in($w=''){
		$this->not_in=' NOT IN ('.$w.')';
		}

        function in($w=''){
		$this->in=' IN ('.$w.')';
		}
		
		function group_by($w=''){
		$this->group_by=' GROUP BY  '.$w;
		}
		
		function order_by($w=''){
		$this->order_by=' ORDER BY  '.$w;
		}
		
		function limit($l='',$b=''){
		$this->limit=' LIMIT '.$l.','.$b;
		}
	
		function query($a) {
		 $this->select=mysql_query($a.$this->where)or die(mysql_error());
		 return $this->select;
		}
		
		function select(){
		$this->select=mysql_query("SELECT $this->field 
									FROM $this->from 
									$this->left_join
									$this->inner_join
									$this->right_join
									$this->on
									$this->where
                                    $this->not_in
                                    $this->in
									$this->group_by
									$this->order_by 
									$this->limit")or die("SELECT $this->field 
									FROM $this->from 
									$this->left_join
									$this->inner_join
									$this->right_join
									$this->on
									$this->where
                                    $this->not_in
                                    $this->in
									$this->group_by
									$this->order_by 
									$this->limit");
		}

                function profiling(){
                mysql_query('SET profiling=1;')or die(mysql_error());
                }

                 function show_profiling(){
                 $a=mysql_query('select sum(duration) from information_schema.profiling where query_id=1;');
                 while($e=mysql_fetch_array($a)):
		 		 $ee[]=$e;
		 		 endwhile;
                 return $ee;
                }

                function create_trigger($name,$event,$action,$table,$statement){
                $b.='create trigger '.$name.' '.$event.' '.$action.' on '.$table;
                if(count($statement)>1):
                $a=' for each row begin ';
                $z=' end; "';
                else:
                $a='for each row ';
                $z='';
                endif;
                for($f=0;$f<count($statement);$f++):
                $c.=' '.$statement[$f];
                endfor;
                $sql=$b.' '.$a.' '.$c.' '.$z;
                mysql_query("$sql")or die($sql);
                }
		
		function result(){
		while($e=mysql_fetch_array($this->select)):
		$ee[]=$e;
		endwhile;
		unset($this->field);
		unset($this->from);
		unset($this->where);
        unset($this->not_in);
        unset($this->in);
		unset($this->left_join);
		unset($this->right_join);
		unset($this->on);
		unset($this->group_by);
		unset($this->order_by);
		unset($this->limit);
		unset($this->select);
		return $ee;
		}
		
		
		function num(){
		unset($this->field);
		unset($this->from);
		unset($this->where);
        unset($this->not_in);
        unset($this->in);
		unset($this->left_join);
		unset($this->right_join);
		unset($this->on);
		unset($this->group_by);
		unset($this->order_by);
		unset($this->limit);
		return mysql_num_rows($this->select);
		}
		
		function row_result(){
		while($e=mysql_fetch_row($this->select)):
		$ee[]=$e;
		endwhile;
		unset($this->field);
		unset($this->from);
		unset($this->where);
                unset($this->not_in);
                unset($this->in);
		unset($this->left_join);
		unset($this->right_join);
		unset($this->on);
		unset($this->group_by);
		unset($this->order_by);
		unset($this->limit);
		unset($this->select);
		return $ee;
		}
	
		function single_result($field=''){
		$output=mysql_fetch_assoc($this->select);
		unset($this->field);
		unset($this->from);
		unset($this->where);
		unset($this->left_join);
		unset($this->right_join);
		unset($this->on);
		unset($this->group_by);
		unset($this->order_by);
		unset($this->limit);
		unset($this->select);
		return $output[$field];
		}
		
		function insert($data,$table=''){
		$all=count($data);
		$t=0;
		foreach($data as $key => $value):
		$t++;
		if(($t % $all)==FALSE):
		$col='';
		else:
		$col=',';
		endif;
		$field.=$key.$col;
		$val.="'".$value."'".$col;
		endforeach;
		if(mysql_query('INSERT INTO '.$table.'('.$field.')VALUES('.$val.')')):
		return true;
		else:
		return false;
		endif;
		}
		
		//fungsi ini untuk memperbarui data ===============================================
		function update($data,$table,$condition){
		$all=count($data);
		$w=count($condition);
		$t=0;
		$g=0;
		foreach($data as $key => $value):
		$t++;
			if(($t % $all)==FALSE):
				$col='';
			else:
				$col=',';
			endif;
		$field.=$key.'="'.$value.'"'.$col;
			endforeach;
		foreach($condition as $key => $value):
		$g++;
			if(($g % $w)==FALSE):
				$col='';
			else:
				$col=' AND ';
			endif;
		$where.=$key.'="'.$value.'"'.$col;
		endforeach;
		$er='UPDATE '.$table.' SET '.$field.' WHERE '.$where;
		$q=mysql_query('UPDATE '.$table.' SET '.$field.' WHERE '.$where)or die($er);
		if($q):
		return true;
		else:
		return false;
		endif;
		}
		
		function delete($table){
		mysql_query("DELETE FROM $table  $this->where $this->not_in $this->in")or die(mysql_error());
		unset($this->where);
		unset($this->not_in);
        unset($this->in);
		}
		
		function max($table,$field){
		$m=mysql_query("SELECT max($field) as maks FROM $table");
		$max=mysql_fetch_array($m);
		return $max['maks'];
		}
}
?>