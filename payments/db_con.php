<?php

		require_once '../../include/config_midtrans.php';
                 $bdbm = new mysqli(SDB_HOST, SDB_USER, SDB_PASSWORD, SDB_NAME);
                if($bdbm->connect_errno > 0){
					die('Unable to connect to database' . $bdbm->connect_error);
				}else{
					//echo "Database spacey is connected."; 
				}
?>
