<html>
 <head>
  <title>Some calcs + Random cats!</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <script src="http://code.jquery.com/jquery-latest.js"></script>
  <script src="js/action.js"></script>
 </head>
 <body>
  <div>
	Так как у нас сайт про вычисления и котиков, посчитаем число ПИ по формуле PI = 2 * (1 + 1/3 * (1 + 2/5 * (1 + 3/7 * (...))))</br>
	Введите точность: 
	<input type=number name=hard >
	<input type=button id=RecCount>
	<div id=PiAnswer></div>
	
  </div>
  <script>
	$('#RecCount').click(function(){
		$('#PiAnswer').html('\
		<?php
			$max = $_POST["hard"];
			function F ($i)
			{
				if ($i>$max) return 0;
				return 1 + $i / (2.0 * $i + 1) * F($i + 1);
			}
			$answer="Ответ: " + 2*F(1);
		echo $answer ?>\
		');
	});
  </script>
  <script src="js/bootstrap.min.js"></script>
 </body>
</html>
