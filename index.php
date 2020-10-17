<?php
// Reads the variables sent via POST
$sessionId   = $_POST["sessionId"];  
$serviceCode = $_POST["serviceCode"];  
$text = $_POST["text"];
//This is the first menu screen
if ( $text == "" ) {
$response  = "CON  Welcome to Imbokodo get assistance or learn more";
$response .= "1. Enter 1 to continue";
}
// Menu for a user who selects '1' from the first menu
// Will be brought to this second menu screen
else if ($text == "1") {
$response  = "CON  Please select a language \n";
$response .= "1. English \n";
$response .= "2. Afrikaans \n";
$response .= "3. Sotho \n";
$response .= "4. Zulu \n";
}
// Menu for a user who selects '1' from the second menu
// Will be brought to this third menu screen
else if ($text == "1*1") {
$response  = "CON  Please select an option below\n";
$response .= "1. Emergency Alert \n";
$response .= "2. Safe House \n";
$response .= "3. Leaving your abuser \n";
$response .= "4. Document Storage\n";
}

   //Menu for a user who selects '1' from the third menu above
  // Will be brought to this third menu screen
  else if ($text == "1*1*1") {
  $response .= "This is only for immediate emergency \n";
  $response .= "Enter 1 to continue \n";
  $response .= "Enter 0 to cancel";
  }

  else if ($text == "1*1*1*1") {
  $response = "Your alert has been recieved";
  $response .= "Enter your address below";
  $response .= "Our emergency rescue team is on the way";
}


  else if ($text == "1*1*1*0") {
  $response = "Your request has been canceled";
  $response .= "Thanks for using our service, \nBrought to you by Imbokodo";
}
