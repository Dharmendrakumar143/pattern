<?php

for($i=1;$i<=3;$i++){

	
for($j=1;$j<=3;$j++){

	echo $i*$j;

}	
	
	echo "<br/>";

}

for($i=0;$i<=5;$i++){
	
	for($k=1;$k<=$i;$k++){
		echo"&nbsp";
	}
	for($j=5;$j>=$i;$j--){
		echo"*";
	}
	echo "<br/>";
}

?>