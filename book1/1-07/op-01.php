 <?php

 	// >는 == 보다 우선순위 입니다.
 	// 1>2 false 입니다.
 	// 숫자 2는 true 입니다.
 	if(1 > 2 == 2){  
    	echo "두개의 논리는 값습니다.<br>";  
 	} else {
 		echo "두개의 논리는 틀립니다.<br>";  
 	}
 
 	// < 는 ==보다 우선순위 입니다.
 	// 1 < 2 는 true 입니다.
 	// 숫자 2는 true입니다.
	if(2 == 1 < 2){   
    	echo "두개의 논리는 값습니다.<br>";   
	} else {
		echo "두개의 논리는 틀립니다.<br>"; 
	}

 ?>