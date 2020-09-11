<?php
  $floor = 0;
  $currentFloor = 0;
  $continueElevatorRun = 0;
  while ($continueElevatorRun == 0) {
  //clearing the screen
   echo " \n";
   echo "looks system('cls'); doesn't work anymore on Windows. Found working solution to clear the screen\n";
   echo "if you see this line the screen wasn't cleared on your machine\n";
   echo " \n";
   echo chr(27).chr(91).'H'.chr(27).chr(91).'J';  
   
   //displaying title of the script
   echo "----------------------------------\n";
   echo "<h1>Elevator script</h1>\n";
   echo"--This is an almost smart elevator. You are in the 11-story building--\n";
   echo"---You are on the floor ".$currentFloor;
   echo" ---\n";
   
   //chosing the floor
   echo "----Write the floor you want to get on----\n";
   echo " \n";
  
  //variable to store the current floor
  if ((is_numeric($floor)) && ((int)$floor>=0) && ((int)$floor<=10)) {$currentFloor = $floor;}

  //getting input from user
  $floor = readline('Enter an integer from 0 to 10: '); 
  
  //cheking input
  $inputOk = false;
  if (is_numeric($floor)){
          echo " \n";
          $floor = (int) $floor;
	  echo "You picked floor: ".$floor;
	  echo " \n";
	  $inputOk = true;
  }
    else {
 	echo " \n";
  	echo "Input was not an integer number between 0-10\n";
  	echo " \n";
  }

 
  //cheking if input was number 0-10
  if ($inputOk == true){
	  if ($floor<0) {
	  	echo " \n";
	  	echo "This building has no underground floors\n";
	  	}
	   if ($floor>10) {
	  	echo " \n";
	  	echo "You cannot go in elevator higher than a roof of the building\n";
	  	}
	   if (($floor>=0) && ($floor<=10)){
	      echo " \n";
	      echo "bzzzzz (imagine sounds of elevator)\n";
	  }


   //moving elevator to chosen floor
	  if ($floor == $currentFloor) {
	    echo " \n";
	    echo "That's the floor where you currently are\n";
	    $currentFloor = $floor;
	  }
	  else {
	  	//switch didn't work for me
	  	echo " \n";
		if ($floor == 0) {echo "Ground floor\n";}
		if ($floor == 1) {echo "-->".$floor."-st floor\n";}
		if ($floor == 2) {echo "-->".$floor."-nd floor\n";}
		if ($floor == 3) {echo "-->".$floor."-rd floor\n";}
		if ($floor == 4) {echo "-->".$floor."-th floor\n";}
		if ($floor == 5) {echo "-->".$floor."-th floor\n";}
		if ($floor == 6) {echo "-->".$floor."-th floor\n";}
		if ($floor == 7) {echo "-->".$floor."-th floor\n";}
		if ($floor == 8) {echo "-->".$floor."-th floor\n";}
		if ($floor == 9) {echo "-->".$floor."-th floor\n";}
		if ($floor == 10) {echo "-->".$floor."-th floor\n";}
	  }
    }

	echo "----------------------------------\n";
	echo " \n";
	
	//question to continue script
	$continue = readline('Want to continue? (y/n): '); 
	if (strpos($continue, 'y') !== false){
	 $continueElevatorRun = 0;
	 if ((is_numeric($floor)) && (is_int($floor)) && ($floor>=0) && ($floor<=10)){$currentFloor = $floor;}
	}
	else {
	 $continueElevatorRun = 1;
	 echo " \n";
	 echo "Leaving script. Have a nice day";
	}
	echo " \n";
	
}

?>