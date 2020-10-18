<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<style>
    
.pic{
	width:50px;
	height:50px;
}
.picbig{
	position: absolute;
	width:0px;
	-webkit-transition:width 0.3s linear 0s;
	transition:width 0.3s linear 0s;
	z-index:10;
}
.pic:hover + .picbig{
	width:600px;
}
</style>
</head>
<body>
    <img class="pic" src="img/hot1.jpg" alt="Adam">
<img class="picbig" src="img/hot1.jpg" alt="Adam">

<img class="pic" src="img/hot2.jpg" alt="heart">
<img class="picbig" src="img/hot2.jpg" alt="heart">

<img class="pic" src="img/hot3.jpg" alt="hardhat">
<img class="picbig" src="img/hot3.jpg" alt="hardhat">

<img class="pic" src="img/hot4.jpg" alt="hardhat">
<img class="picbig" src="img/hot4.jpg" alt="hardhat">

<img class="pic" src="img/hot5.jpg" alt="hardhat">
<img class="picbig" src="img/hot5.jpg" alt="hardhat">

<img class="pic" src="img/hot6.jpg" alt="hardhat">
<img class="picbig" src="img/hot6.jpg" alt="hardhat">
</body>
</html>
