<?php
class Session{
	function Session(){
	if(!file_exists(SESSION_SAVE)):
	mkdir(SESSION_SAVE,0755);
	else:
	$save=ini_set("session.save_path",SESSION_SAVE);
	endif;
	session_start();
	}
		function create($data,$name)
		{
                foreach($data as $row => $value):
                $_SESSION[$name][$row]=$value;
                endforeach;
		}

        function decode($str){
            session_decode($str);
        }

        function set_expire($x){
        $this->exp=time()+$x;
        $_SESSION['exp']=$this->exp;
        }

        function expire(){
         $exp=$_SESSION['exp'];
         if($time<$exp):
         $_SESSION['exp']=$this->exp;
         else:
         session_destroy();
         header('location:sdsadsas');
         endif;
        }

	function destroy(){
	session_destroy();
	}
//========================================================================================================
/*this is the checker code
*/		
	function get($name){
	$data=$_SESSION[$name];
	return $data;
	}
	
}
?>