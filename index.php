<!DOCTYPE html>
<html>
<head>
<title>Latihan Git Branch</title>
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
<style type="text/css">
.item {
	background: #0099ff;
	padding: 40px;
}
</style>
</head>
<body>

	<div class="owl-carousel owl-theme">
	    <div class="item"><h4>1</h4></div>
	    <div class="item"><h4>2</h4></div>
	    <div class="item"><h4>3</h4></div>
	    <div class="item"><h4>4</h4></div>
	    <div class="item"><h4>5</h4></div>
	    <div class="item"><h4>6</h4></div>
	    <div class="item"><h4>7</h4></div>
	    <div class="item"><h4>8</h4></div>
	    <div class="item"><h4>9</h4></div>
	    <div class="item"><h4>10</h4></div>
	    <div class="item"><h4>11</h4></div>
	    <div class="item"><h4>12</h4></div>
	</div>

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script type="text/javascript">
$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
});
</script>
</body>
</html>