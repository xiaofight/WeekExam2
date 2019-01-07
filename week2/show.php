<?php 
	//封装函数
	function gjxq($n){
		echo "<h1>国际象棋棋盘</h1>";
		echo "<table border='1px'>";
		for ($i=0; $i < $n; $i++) { 
			echo "<tr>";
			for ($j=0; $j < $n; $j++) { 
				if(($i+$j)%2==0){
					echo "<td width='50px' height='50px' bgcolor='black'></td>";
				}else{
					echo "<td></td>";
				}
			}
			echo "</tr>";
		}
		echo "</table>";
	}
	// 调用函数
	gjxq(10);
 ?>