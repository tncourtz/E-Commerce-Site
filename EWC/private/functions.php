<?php
	function url_for($specify){
		if($sepcify[0] != '/'){
			$specify = "/" . $specify;
		}return WWW_ROOT . $specify;
	}
	require_once('initialize.php');
?>
