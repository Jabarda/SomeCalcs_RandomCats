<?php
			$max = (int)$_POST["hard"];
			function F ($i)
			{
				if ($i>$max) return 0;
				return 1 + $i / (2.0 * $i + 1) * F($i + 1);
			} 
			print "<script language='Javascript'><!-- 
			function update() {$('#PiAnswer').html(\"Ответ: ".2*F(1)."\");} ></script>"
			?>