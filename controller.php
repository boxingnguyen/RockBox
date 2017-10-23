<?php
	// wheel left ( pin 11, 13 on board)
	system("gpio -g mode 17 out"); 
	system("gpio -g mode 27 out");
	// wheel right ( pin 19, 21 on board)
	system("gpio -g mode 10 out");
	system("gpio -g mode 09 out");
	
	system("gpio -g write 27 0");
	system("gpio -g write 17 0");
	system("gpio -g write 09 0");
	system("gpio -g write 10 0");
	if(isset($_POST['move'])) {
		$move = $_POST['move'];
		if($move == 'backward') {
			system("gpio -g write 17 1");
			system("gpio -g write 09 1");			
		} elseif ($move == 'forward') {
	        system("gpio -g write 27 1");
	        system("gpio -g write 10 1");
		} elseif ($move == 'left') {
	        system("gpio -g write 10 1");
		} elseif($move == 'right') {
	        system("gpio -g write 27 1");
		} else {
			system("gpio -g write 27 0");
			system("gpio -g write 17 0");
			system("gpio -g write 09 0");
			system("gpio -g write 10 0");
		}
		echo true;
	} else {
		return;
	}
?>
