<?php 

function dd($data) {
	echo "<pre>";
	var_dump($data);
	echo "</pre>";
}

function how_old($age){
	if($age<=21){
		echo 'You not old person';
		echo "<br>You age:$age<br>";
	}
	else{
		echo "You very old";
		echo "<br>You age:$age<br>";
	}
}



 ?>