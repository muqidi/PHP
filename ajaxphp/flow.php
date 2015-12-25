<?php

define('IN_ECS', true);
require('../includes/init.php');


function drop_consignee($id)
{
    $sql = "SELECT user_id FROM " .$GLOBALS['ecs']->table('user_address') . " WHERE address_id = '$id'";
    $uid = $GLOBALS['db']->getOne($sql);

    if ($uid != $_SESSION['user_id'])
    {
        return false;
    }
    else
    {
        $sql = "DELETE FROM " .$GLOBALS['ecs']->table('user_address') . " WHERE address_id = '$id'";
        $res = $GLOBALS['db']->query($sql);

        return $res;
    }
}
$action = $_GET['action'];
if ($action == 'delete'){
$consignee_id = stripslashes(trim($_POST['id']));
if (drop_consignee($consignee_id))
{
    $arr['success'] = 1;
	$arr['msg'] = '删除操作成功';
	$json = json_encode($arr);
	echo $json;
	exit;
}
$arr['success'] = 0;
$arr['msg'] = '删除操作失败';
$json = json_encode($arr);
echo $json;
	exit;
	}
elseif($action == 'save'){
		
}
elseif($action == 'updata'){
		
}
elseif($action == 'moren'){
	$consignee_id = stripslashes(trim($_POST['id']));
	$sql="UPDATE " .$GLOBALS['ecs']->table('users') . " SET `address_id`='$consignee_id' WHERE (`user_id`='".$_SESSION['user_id'] ."')";
    $res = $GLOBALS['db']->query($sql);

    if($res){
		$_SESSION["address_id"]=$consignee_id;
		$arr['success'] = 1;
		$arr['msg'] = '操作成功';
		$json = json_encode($arr);
		echo $json;
		exit;
	}
	$arr['success'] = 0;
	$arr['msg'] = '操作失败';
	$json = json_encode($arr);
	echo $json;
	exit;
}

?>
