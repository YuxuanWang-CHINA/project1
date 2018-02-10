<?php session_start(); 
require_once('../xajax/xajax_core/xajax.inc.php');
?>
<?php include "../fixed/start.php"; ?>
<link rel="stylesheet" type="text/css" href="/project1/fixed/fixed.css">
<link rel="stylesheet" type="text/css" href="/project1/vip/vip.css">
<style>
.fixed3 {
	top: 500px !important;
}
</style>
<?php
/*判断是否登录*/
if(!isset($_SESSION['project1_username']))
{header("location:login.php");}
?>	    	
<?php
	include "../fixed/header.php";
	include "../fixed/top.php";
?>
	<div class="center-1">
	<p class="vipt5"><?php echo "<span class='vipt3'>欢迎</span><span class='vipt4'>".$_SESSION['project1_username']."</span>"; ?></p>
	</div>
<?php include "../fixed/footer.php"; ?>