<?php
/*
	YuxuanWang-CHINA 
	project1
	简单的会员与页眉页脚系统
	
	MIT License
	Copyright (c) 2018 Yuxuan_Wang
*/
?>
<?php 
session_start();
	require_once('../xajax/xajax_core/xajax.inc.php');

	$xajax_login=new xajax();
	$xajax_login->configure('javascript URI','../xajax/');
	//$xajax_login->configure('debug',true);
	$xajax_login->register(XAJAX_FUNCTION,"judgement");

	$xajax_login->processRequest();
	
	function judgement($username,$password)
	{
		$objResponse= new xajaxResponse();
		if($username==null || $username=="" || $password==null || $password=="")
		{
		$objResponse->script("alert('Please insert!');flashstop();");
		}
			else{
			$mysqli=new mysqli("please_input","please_input","please_input","project1");
			$sql="SELECT password,power FROM userlist WHERE username=\"".$username."\"";
			$result=mysqli_query($mysqli,$sql);
			if($arr=mysqli_fetch_array($result))
				{
				if ($arr[0]==$password)
					{
						$_SESSION['project1_username']=$username;
						$_SESSION['power']=$arr[1];
						mysqli_close($mysqli);
						$objResponse->redirect('center.php');
					}
				}else{
       			$objResponse->script("alert('username or password wrong!');flashstop();");
				}
				}
		return $objResponse;
		}
		?>
<?php include "../fixed/start.php"; ?>
<?php $xajax_login->printJavascript(); ?>
<title>会员登录</title>
<link rel="stylesheet" type="text/css" href="/project1/vip/vip.css">
<style>
.fixed3 {
	top: 500px !important;
}
</style>
<?php
	include "../fixed/header.php";
	include "../fixed/top.php";
?>
<?php
/*判断是否登录*/
if(isset($_SESSION['project1_username']))
{header("location:center.php");}
?>
<div class="login-input">
    <p class="vipt1">请输入</p>
    <label class="vipt1" for="username">用户名:</label>
    <input type="text" name="username" id="username" class="vipt2">
    <br/><br/>
	<label class="vipt1" for="password">密码:</label>
    <input type="password" name="password" id="password" class="vipt2">
    <br/><br/>
	<button class="vipt1" type="botton" id="bottom" onClick="xajax_judgement(
    document.getElementById('username').value,
    document.getElementById('password').value);">确定</button>
</div>
<?php include "../fixed/footer.php"; ?>
