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
	unset($_SESSION['project1_username']);
	unset($_SESSION['power']);
?>
<script>
window.history.back()
</script>
