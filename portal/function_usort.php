<?php
function date_compare($a, $b)
{
		$t1 = strtotime($a['dategen']);
		$t2 = strtotime($b['dategen']);
		//return $t1 - $t2;
		return $t2 - $t1;

}    
?>