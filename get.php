<?php
define('IN_ECS', true);

require(dirname(__FILE__) . '/includes/init.php');

if ((DEBUG_MODE & 2) != 2)
{
    $smarty->caching = true;
}

if(isset($_GET['action']) ){
	$action = $_GET['action'];
	if($action=="Bingcategroychild"){
		$cat_id = stripslashes(trim($_POST['cat_id']));
		$array = get_child($cat_id);
		$json = json_encode($array);
		echo $json;
	}
}


function get_child($cat_id){
	        $sql = 'SELECT cat_id,cat_name ,parent_id ' .
                'FROM ' . $GLOBALS['ecs']->table('category') .
                "WHERE parent_id = '$cat_id' AND is_show = 1 ORDER BY sort_order ASC, cat_id ASC";

        $res = $GLOBALS['db']->getAll($sql);
		
        foreach ($res AS$idx=> $row){
			$array[$idx]['id'] = $row['cat_id'];
			$array[$idx]['name'] = $row['cat_name'];
			$array[$idx]['url'] = build_uri('category', array('cid' => $row['cat_id']), $row['cat_name']);
		}
		return $array;
}


?>