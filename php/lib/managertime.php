<?php 

function manager($timem){
	if($timem==11){
		return 11;
	}
	if($timem==12){
		return 12;
	}
	if($timem==11){
		return 11;
	}
	if($timem==10){
		return 10;
	}
	if($timem==9){
		return 9;
	}
	if($timem==0){
		return 12;
	}
	if($timem== 13){
		return 1;
	}
	if($timem == 14){
		return 2;
	}
	if($timem == 15){
		return 3;
	}
	if($timem == 16){
		return 4;
	}
	if($timem == 17){
		return 5;
	}
	if($timem == 18){
		return 6;
	}	
	if($timem == 19){
		return 7;
	}	
	if($timem == 20){
		return 8;
	}	
	if($timem == 21){
		return 9;
	}
	if($timem == 22){
		return 10;
	}
}

//return format: 24 hr 
function getsimpletime(){
	 $h = getdate()['hours'];
	 $m = getdate()['minutes'];
 	$s = getdate()['seconds'];
 	
 	return ['h' => manager($h), 'm' => $m, 's' => $s];
      
}

