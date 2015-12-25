<?php

define('IN_ECS', true);

require('../includes/init.php');

function echomsg($int,$msg){
	$arr['success'] = $int;
	$arr['msg'] = $msg;
	$json = json_encode($arr);
	echo $json;
}
try {
	$action = $_GET['action'];
	if ($action == 'login') {  //登录
		$user = stripslashes(trim($_POST['user']));
		$pass = stripslashes(trim($_POST['pass']));
		$flag = $_POST['flag'];
		if (empty ($user) ||empty ($pass) ||empty($flag)) {
			echomsg(0,"the username or password is empty!");
			exit;
		}
		$md5pass = md5($pass);
	
		if($flag=='true'){
			$sel ="select * from ".$GLOBALS['ecs']->table('users'). " where tel='$user'";
		}else{
			$sel ="select * from ".$GLOBALS['ecs']->table('users'). " where email='$user' and person = 1";
		}
		
		$row = $db->getRow($sel);
		if ($row['password'] == $md5pass) {

			$_SESSION['user_id']=$row['user_id'];
			update_user_info();      // 更新用户信息
			recalculate_price();     // 重新计算购物车中的商品价格
				//echo '1';exit;
			$arr['success'] = 1;
			$arr['msg'] = 'login success!';
			$arr['user'] = $_SESSION['user'];
			$arr['login_time'] = date('Y-m-d H:i:s',$_SESSION['login_time']);
			$arr['visit_count'] = $_SESSION['visit_count'];
			
		} else {
			$arr['success'] = 0;
			$arr['msg'] = '账号密码错误';
		}
		$json = json_encode($arr);
		echo $json;
	
	}
	elseif ($action == 'logout') {  //退出
		unset($_SESSION);
		session_destroy();
		echo '1';
	}
} catch (Exception $e) {
	$arr['success'] = 0;
	$arr['msg'] =  $e;
	$json = json_encode($arr);
	echo $json;
}


//获取用户真实IP
function get_client_ip() {
	if (getenv("HTTP_CLIENT_IP") && strcasecmp(getenv("HTTP_CLIENT_IP"), "unknown"))
		$ip = getenv("HTTP_CLIENT_IP");
	else
		if (getenv("HTTP_X_FORWARDED_FOR") && strcasecmp(getenv("HTTP_X_FORWARDED_FOR"), "unknown"))
			$ip = getenv("HTTP_X_FORWARDED_FOR");
		else
			if (getenv("REMOTE_ADDR") && strcasecmp(getenv("REMOTE_ADDR"), "unknown"))
				$ip = getenv("REMOTE_ADDR");
			else
				if (isset ($_SERVER['REMOTE_ADDR']) && $_SERVER['REMOTE_ADDR'] && strcasecmp($_SERVER['REMOTE_ADDR'], "unknown"))
					$ip = $_SERVER['REMOTE_ADDR'];
				else
					$ip = "unknown";
	return ($ip);
}
?>
