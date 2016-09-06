<?php 
$config['events'] = array(

	'insert_user' => function($type, $message){

		$log = new Log_into();
		$log->index($type, $message);

	},

	'update_user' => function($type, $message){

		$log = new Log_into();
		$log->index($type, $message);

	}

);
?>