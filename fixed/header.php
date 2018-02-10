<?php
/*设置时区*/
ini_set("date.timezone","Asia/Shanghai");
?>
<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
<link rel="stylesheet" type="text/css" href="/project1/fixed/fixed.css"/>
</head>
<body onLoad="startTime()">
<div class="fixed1">
	<?php /*判断是否登录*/ ?>
	<?php if (isset($_SESSION['project1_username'])) { ?>
   		<div id="already" class="fixed2">
    		<a href="/project1/vip/center.php"> <?php echo $_SESSION['project1_username'] ?> </a>
    		<a>&nbsp;</a>
            <a href="/project1/vip/exit.php">注销</a>
    	</div>
	<?php }else{ ?>
    	<div id="not_yet" class="fixed2">
   			<a href="/project1/vip/login.php">登录</a>
   		</div>
	<?php } ?>
</div>