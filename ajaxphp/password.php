<?php

define('IN_ECS', true);

require('../includes/init.php');

try {
	session_start();
	$code_tel = stripslashes(trim($_POST['data']));
	$action = $_GET['action'];
	if($action == "yancode"){
		if($code_tel!=$_SESSION["code_tel"]){
			$arr['success'] = 0;
			$arr['msg'] = "注册验证码填写有误。";
			$json = json_encode($arr);
			echo $json;
			exit;
		}else {
			$_SESSION['isflag']=1;
			$arr['success'] = 1;
			$arr['msg'] = "";
			$json = json_encode($arr);
			echo $json;
			exit;
		}
	}
	else if($action == "xiupass"){
	
		$flag=$_SESSION['isflag'];
		$data = stripslashes(trim($_POST['data']));
		$id = $_SESSION['id'];
		if(empty($data)&&empty($id)&&empty($flag)){
			$arr['success'] = 0;
			$arr['msg'] = "修改密码出现错误！";
			$json = json_encode($arr);
			echo $json;
			exit;
		}
		if($flag!=1){
			$arr['success'] = 0;
			$arr['msg'] = "请不要非法操作。";
			$json = json_encode($arr);
			echo $json;
			exit;
		}

		$md5pass = md5($data);
		$var ="update ".$GLOBALS['ecs']->table('users'). " set password='$md5pass' where user_id = '$id'";
		$rs =  $GLOBALS['db']->query($var);
		if ($rs) {
			$arr['success'] = 1;
			$arr['msg'] = '修改密码成功';
		} else {
			$arr['success'] = 0;
			$arr['msg'] = "修改密码错误";
		}
		$json = json_encode($arr);
		echo $json;
	}
} catch (Exception $e) {
	$arr['success'] = 0;
	$arr['msg'] = $e;
	$json = json_encode($arr);
}

