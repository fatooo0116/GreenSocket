<!DOCTYPE HTML>
<html>
<head>
<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.11.3/TweenMax.min.js"></script>
<script>
$(document).ready(function(){

	TweenLite.to($("#red"), 1.5, {width:400});
});

</script>
<style>
#red{ 
	width:100px;
	height:100px;
	background:#bf0000;
	position:absolute;
	margin:100px;
}
</style>
</head>
<body>

<div id="red"></div>




<?php ?>
</body>
</html>