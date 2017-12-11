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
	<input type="text" name="hard" /></br>
	<input type="button" id="RecCount" value="Посчитать!" />
	<div id=PiAnswer></div>
	
  </div>
  <script>
	$('#RecCount').click(function(){
		$('#PiAnswer').html('\
		<?php
			function F ($i)
			{
				if ($i>100000) return 0;
				return 1 + $i / (2.0 * $i + 1) * F($i + 1);
			}
			$answer=2*F(1);
			echo "Ответ: " ;
			echo '<div hidden=\"true\" id=\"Answer\" value=\"'.$answer.'\"></div>'; ?>\
		');
	});
  </script>
  <script src="js/bootstrap.min.js"></script>
 </body>
</html>
