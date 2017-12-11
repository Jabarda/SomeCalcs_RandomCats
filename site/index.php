<html>
 <head>
  <title>Some calcs + Random cats!</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <script src="http://code.jquery.com/jquery-latest.js"></script>
  <script src="js/action.js"></script>
 </head>
 <body>
  <div>
	Это простой сайт про вычисления и котиков </br>
	Например, посчитаем число ПИ по формуле PI = 2 * (1 + 1/3 * (1 + 2/5 * (1 + 3/7 * (...))))</br>
	Введите знаки после запятой: 
	<input type="text" id="hard" /></br>
	<input type="button" id="RecCount" value="Посчитать!" />
	<div id=PiAnswer></div>
	
  </div>
  <script>
	$('#RecCount').click(function(){
		$('#PiAnswer').html('\
		<?php
			function F ($i)
			{
				if ($i>10000) return 0;
				return 1 + $i / (2.0 * $i + 1) * F($i + 1);
			}
			$answer=2*F(1);
			echo "Ответ: " ;
			echo '<input type="text" readonly="true" id="Answer" value="'.$answer.'"></div>'; 
			echo '<input type="text" readonly="true" hidden="true" id="Error" value="Слишком много знаков!("></div>'; 
			?>
		');
		if (parseInt(document.getElementById('hard').value)<=13) {
			document.getElementById('Answer').hidden=false;
			document.getElementById('Error').hidden=true;
			document.getElementById('Answer').value=parseFloat(document.getElementById('Answer').value).toFixed(parseInt(document.getElementById('hard').value)); 
		}
		else
		{
			document.getElementById('Answer').hidden=true;
			document.getElementById('Error').hidden=false;
		}
	});
  </script>
  <div>
	Теперь посмотрим видео с котиками:
	<input type="button" id="GiveCats!" value="Дайте котиков!" />
	<iframe id="video" width="560" height="315" hidden="true" src="https://www.youtube.com/embed/r3RMZGlahR8" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
  </div>
  <script>
	$('#GiveCats').click(function(){
		<?php
			echo 'var array= ["https://www.youtube.com/watch?v=NsUWXo8M7UA", "https://www.youtube.com/watch?v=bpVbYauEkGY", "https://www.youtube.com/watch?v=r3RMZGlahR8", "https://www.youtube.com/watch?v=6U_XREUMOAU", "https://www.youtube.com/watch?v=tGTe6rnvWF4", "https://www.youtube.com/watch?v=sVi1go-hqh0", "https://www.youtube.com/watch?v=t8tjT9MA7yU", "https://www.youtube.com/watch?v=3EIbWjkimAs"];';
			echo 'var randomUrl=array[Math.floor(Math.random() * (7 - 0))];';
			echo 'document.getElementById("video").src=randomUrl;';
			echo 'document.getElementById("video").hidden=false;';
		?>
	});
	</script>
  <script src="js/bootstrap.min.js"></script>
 </body>
</html>
