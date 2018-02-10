<div class="fixed4">
	<a href="/project1/index.php"><img src="/project1/sign.png" width="20%" height="144" alt="主页" ></a>
	<a class="fixedt3">欢迎来到王宇轩的网站</a>
<div class="fixed5">
	<a class="fixedt2">现在是：<span id="time"></span></a>
    
	<script>
	function startTime()
		{
		var today=new Date()
		var h=today.getHours()
		var m=today.getMinutes()
		var s=today.getSeconds()
		m=checkTime(m)
		s=checkTime(s)
		document.getElementById("time").innerHTML=h+":"+m+":"+s
		t=setTimeout('startTime()',500)
		}
	function checkTime(i)
		{
		if (i<10) 
  			{i="0" + i}
  		return i
		}

	</script>	
</div>
</div>
