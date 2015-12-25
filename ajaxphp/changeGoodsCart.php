<?php

define('IN_ECS', true);

require('../includes/init.php');


$cart_id = stripslashes(trim($_POST['data']));
$number = stripslashes(trim($_POST['number']));

$num = floatval($number);


$sql = "SELECT goods_id FROM ".$GLOBALS['ecs']->table('cart'). " where rec_id=$cart_id and session_id = '". SESS_ID ."' ";

$row = $db->getOne($sql);

$sql = "SELECT goods_number FROM ".$GLOBALS['ecs']->table('goods'). "where goods_id = $row";  

$num1 = $db->getOne($sql);

$sql = "SELECT sum(goods_number) FROM ".$GLOBALS['ecs']->table('cart'). " where goods_id = $row and rec_id != $cart_id ";

$num2 = $db->getOne($sql);

//应该排除购物车里面的数量

if($num1- $num2 < $num){
	$arr["success"]=0;
	$arr["msg"]="库存不足。";
	$json = json_encode($arr);
	echo $json;
	exit;
}

$sql = "UPDATE ".$GLOBALS['ecs']->table('cart'). " SET goods_number = $num WHERE (rec_id=$cart_id and session_id = '". SESS_ID ."')";

$row = $db->query($sql);
if($row){
			
	$err1['success']=1;
	$err1['msg']='注册成功!';
	$json = json_encode($err1);
	echo $json;
	exit;
}
$err1['success']=0;
$err1['msg']='哎呀!出现一个错误.'.$sql;
$json = json_encode($err1);
echo $json;
exit;

?>