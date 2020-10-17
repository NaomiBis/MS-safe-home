<?php
// Reads the variables sent via POST
$sessionId   = $_POST["sessionId"];
$serviceCode = $_POST["serviceCode"];


//This is the first menu screen

if ( $text == "" ) {
  $response  = "CON  Welcome to Imbokodo get assistance or learn more \n";
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
  $response =. "Enter your address below";
  $response =. "Our emergency rescue team is on the way";
}


else if ($text == "1*1*1*0") {
  $response = "Your request has been canceled";
  $response =. "Thanks for using our service, \nBrought to you by Imbokodo";
}

// Menu for a user who selects "2" from the second menu above
// Will be brought to this fourth menu screen
else if ($text == "1*2") {
  $response  = "CON  Kies 'n opsie hieronder\n";
  $response .= "1. Noodwaarskuwing \n";
  $response .= "2. Huis van veiligheid \n";
  $response .= "3. Verlaat u mishandelaar \n";
  $response .= "4. Dokumentberging\n";
}

//Menu for a user who selects '1' from the third menu above
// Will be brought to this third menu screen
else if ($text == "1*2*1") {
  $response .= "Dit is slegs vir onmiddellike noodgevalle \n";
  $response .= "Voer 1 in om voort te gaan \n";
  $response .= "Voer 0 in om te kanselleer";
  }
        
  else if ($text == "1*2*1*1") {
    $response = "U waarskuwing is ontvang";
    $response =. "Voer u adres hieronder in";
    $response =. "Ons noodreddingspan is op pad";
  }
  
    
  else if ($text == "1*2*1*0") {
    $response = "U versoek is gekanselleer";
    $response =. "Dankie vir die gebruik van ons diens, \ngebring deur Imbokodo";
  }

// Menu for a user who selects '1' from the second menu
// Will be brought to this third menu screen
else if ($text == "1*3") {
  $response  = "CON  Ka kopo khetha khetho e ka tlase\n";
  $response .= "1. Tlhokomeliso ea maemo a tšohanyetso \n";
  $response .= "2. Ntlo e Sireletsehileng \n";
  $response .= "3. Ho siea motho ea u hlekefetsang \n";
  $response .= "4. Tokomane ea polokelo\n";
  }

//Menu for a user who selects '1' from the third menu above
// Will be brought to this third menu screen
else if ($text == "1*3*1") {
  $response .= "Sena ke sa maemo a tšohanyetso \n";
  $response .= "Kenya 1 ho tsoela pele \n";
  $response .= "Kenya 0 ho hlakola";
  }

  else if ($text == "1*3*1*1") {
    $response = "Tlhokomeliso ea hau e amohetsoe";
    $response =. "Kenya aterese ea hau ka tlase";
    $response =. "Sehlopha sa rona sa pholoso \nsa maemo a tšohanyetso se tseleng";
  }
        
  else if ($text == "1*1*1*0") {
    $response = "Kopo ea hau e hlakotsoe";
    $response =. "Re leboha ho sebelisa ts'ebeletso ea rona, \nE u tliselitse eona ka Imbokodo";
  }
  

  else if ($text == "1*4") {
    $response  = "CON Sicela ukhethe inketho engezansi\n";
    $response .= "1. Isaziso Esiphuthumayo \n";
    $response .= "2. Indlu Ephephile \n";
    $response .= "3. Ukushiya umhlukumezi wakho \n";
    $response .= "4. Isitoreji Sombhalo\n";
    }

//Menu for a user who selects '1' from the third menu above
// Will be brought to this third menu screen
else if ($text == "1*4*1") {
  $response .= "Lokhu kwenzelwa isimo esiphuthumayo \n esisheshayo kuphela \n";
  $response .= "Faka u-1 ukuze uqhubeke \n";
  $response .= "Faka u-0 ukuze ukhansele";
  }
                       
  else if ($text == "1*4*1*1") {
    $response = "Isaziso sakho sitholiwe";
    $response =. "Faka ikheli lakho ngezansi";
    $response =. "Ithimba lethu labezimo eziphuthumayo lisendleleni";
  }
            
  else if ($text == "1*4*1*0") {
    $response = "Isicelo sakho sikhanseliwe";
    $response =. "Siyabonga ngokusebenzisa insiza yethu, n\ Esilethelwe yona yi-Imbokodo";
  }

  // Menu for a user who selects "2" from the second menu above
// Will be brought to this fourth menu screen
else if ($text == "1*1*2") {
  $response = "CON Safe houses are organisations that can help you \n with a accomodation and other services \n";
  $response .= "Please Enter 1 to confirm your need for a safe house\n";
  $response .= "Please Enter 0 to cancel";
  }

  else if ($text == "1*1*2*1") {
    $response = "Your safe house request has been recieved";
    $response =. "Enter your address below, if you need transport";
    $response =. "Our emergency rescue team is on the way";
  }

  else if ($text == "1*1*2*0") {
    $response = "Your request has been canceled";
    $response =. "Thanks for using our service, \nBrought to you by Imbokodo";
  }

  // Menu for a user who selects "2" from the second menu above
// Will be brought to this fourth menu screen
else if ($text == "1*2*2") {
  $response = "CON Veilige huise is organisasies wat u kan help \n met akkommodasie en ander dienste \n";
  $response .= "Voer 1 in om u behoefte aan 'n veilige huis te bevestig\n";
  $response .= "Voer asseblief 0 in om te kanselleer";
  }

  else if ($text == "1*2*2*1") {
    $response = "U veilige huisversoek is ontvang";
    $response =. "Voer u adres hieronder in as u vervoer benodig";
    $response =. "Ons noodreddingspan is op pad";
  }

  else if ($text == "1*2*2*0") {
    $response = "U versoek is gekanselleer";
    $response =. "Dankie vir die gebruik van ons diens, \n gebring deur Imbokodo";
  }

  // Menu for a user who selects "2" from the second menu above
// Will be brought to this fourth menu screen
else if ($text == "1*3*2") {
  $response = "CON Matlo a bolokehileng ke mekhatlo e ka u thusang \n ka bolulo le lits'ebeletso tse ling \n";
  $response .= "Ka kopo kenya 1 ho netefatsa tlhoko ea hau ea ntlo e bolokehileng\n";
  $response .= "Ka kopo kenya 0 ho hlakola";
  }

  else if ($text == "1*3*2*1") {
    $response = "Kopo ea hau ea ntlo e bolokehileng e amohetsoe";
    $response =. "Kenya aterese ea hau ka tlase, haeba o hloka sepalangoang";
    $response =. "Sehlopha sa rona sa pholoso sa maemo a tšohanyetso se tseleng";
  }

  else if ($text == "1*3*2*0") {
    $response = "Kopo ea hau e hlakotsoe";
    $response =. "Re leboha ho sebelisa ts'ebeletso ea rona, \nE u tliselitse eona ka Imbokodo";
  }

  // Menu for a user who selects "2" from the second menu above
// Will be brought to this fourth menu screen
else if ($text == "1*4*2") {
  $response = "CON Izindlu eziphephile izinhlangano ezingakusiza \n ngendawo yokuhlala kanye nezinye izinsiza \n";
  $response .= "Sicela ufake u-1 ukuqinisekisa isidingo sakho sendlu ephephile\n";
  $response .= "Sicela ufake u-0 ukuze ukhansele";
  }

  else if ($text == "1*4*2*1") {
    $response = "Isicelo sakho sendlu ephephile sitholiwe";
    $response =. "Faka ikheli lakho ngezansi, uma udinga ezokuthutha";
    $response =. "Ithimba lethu labezimo eziphuthumayo lisendleleni";
  }

  else if ($text == "1*4*2*0") {
    $response = "Isicelo sakho sikhanseliwe";
    $response =. "Siyabonga ngokusebenzisa insiza yethu, n\ Esilethelwe yona yi-Imbokodo";
  }

  // Menu for a user who selects "2" from the second menu above
// Will be brought to this fourth menu screen
else if ($text == "1*1*3") {
    $response = "CON Do you need advice on how to leave your abuser? \n";
    $response .= "Enter 1 to continue \n";
    $response .= "Enter 0 to cancel";
    }

    // Menu for a user who enters "1" from the fifth menu
 else if ($text == "1*1*3*1") {
  $response = "CON An organisation will contact you shortly with a safety plan";
  $response .= "Enter your contact details below to continue \n";
  $response .= "Enter 0 to cancel \n";
  }

  else if ($text == "1*1*3*0") {
    $response = "Your request has been canceled";
    $response =. "Thanks for using our service, \nBrought to you by Imbokodo";
  }

  // Menu for a user who selects "2" from the second menu above
// Will be brought to this fourth menu screen
else if ($text == "1*2*3") {
  $response = "CON Het u advies nodig oor hoe u u mishandelaar moet verlaat?? \n";
  $response .= "Voer 1 in om voort te gaan \n";
  $response .= "Voer 0 in om te kanselleer";
  }

    // Menu for a user who enters "1" from the fifth menu
 else if ($text == "1*2*3*1") {
  $response = "CON 'N Organisasie sal binnekort met \n u in verbinding tree met 'n veiligheidsplan";
  $response .= "Voer u kontakbesonderhede hieronder in om voort te gaan \n";
  $response .= "Voer 0 in om te kanselleer \n";
  }

  else if ($text == "1*2*3*0") {
    $response = "U versoek is gekanselleer";
    $response =. "Dankie vir die gebruik van ons diens, \n gebring deur Imbokodo";
  }

    // Menu for a user who selects "2" from the second menu above
// Will be brought to this fourth menu screen
else if ($text == "1*3*3") {
  $response = "CON Na o hloka likeletso mabapi le hore \n na o ka tlohela joang motho ea u hlekefetsang? \n";
  $response .= "Kenya 1 ho tsoela pele \n";
  $response .= "Kenya 0 ho hlakola";
  }

     // Menu for a user who enters "1" from the fifth menu
 else if ($text == "1*3*3*1") {
  $response = "CON Mokhatlo o tla ikopanya le uena \n haufinyane ka moralo oa polokeho";
  $response .= "Kenya lintlha tsa hau tsa puisano \n ka tlase ho tsoela pele \n";
  $response .= "Kenya 0 ho hlakola \n";
  }

  else if ($text == "1*3*3*0") {
    $response = "Kopo ea hau e hlakotsoe";
    $response =. "Re leboha ho sebelisa ts'ebeletso ea rona, \n E u tliselitse eona ka Imbokodo";
  }

    // Menu for a user who selects "2" from the second menu above
// Will be brought to this fourth menu screen
else if ($text == "1*4*3") {
  $response = "CON Ngabe udinga izeluleko zokuthi ungamshiya \n kanjani umhlukumezi wakho? \n";
  $response .= "Faka u-1 ukuze uqhubeke \n";
  $response .= "Faka u-0 ukuze ukhansele";
  }

   // Menu for a user who enters "1" from the fifth menu
 else if ($text == "1*4*3*1") {
  $response = "CON Inhlangano izokuthinta maduzane ngohlelo lokuphepha";
  $response .= "Faka imininingwane yakho yokuxhumana ngezansi ukuze uqhubeke \n";
  $response .= "Faka u-0 ukuze ukhansele \n";
  }

  else if ($text == "1*4*3*0") {
    $response = "Isicelo sakho sikhanseliwe";
    $response =. "Siyabonga ngokusebenzisa insiza yethu, n\ Esilethelwe yona yi-Imbokodo";
  }

  // Menu for a user who enters "4" from the second menu above
// Will be brought to this sixth menu screen
else if ($text == "1*1*4") {
  $response = "CON This is for keeping your important documents safe at an organisation\n";
  $response .= "Please Enter 1 to continue \n";
  $response .= "Please Enter 0 to cancel \n";
  }

  // Menu for a user who enters "1" from the sixth menu
else if ($text == "1*1*4*1") {
  $response =  "Please take the following original documents";
  $response .= "ID/Birth certificate & Educational certificate";
  $response .= "Legal documents & Medical documents";
  $response .= "To the nearest organisation or police station";
  $response .= "Thanks for using our service, \nBrought to you by Imbokodo \n";
  $response .= "To return to the main men, Enter 9 below \n";
  }

  else if ($text == "1*1*4*0") {
    $response = "Your request has been canceled";
    $response =. "Thanks for using our service, \nBrought to you by Imbokodo. \n";
  }

  else if ($text == "1*1*4*1*9") {
    $response  = "CON  Please select a language \n";
    $response .= "1. English \n";
    $response .= "2. Afrikaans \n";
    $response .= "3. Sotho \n";
    $response .= "4. Zulu \n";
  }

    // Menu for a user who enters "4" from the second menu above
// Will be brought to this sixth menu screen
else if ($text == "1*2*4") {
  $response = "CON Dit is om u belangrike dokumente by 'n organisasie veilig te hou. \n";
  $response .= "Voer 1 in om voort te gaan \n";
  $response .= "Voer asseblief 0 in om te kanselleer \n";
  }

    // Menu for a user who enters "1" from the sixth menu
else if ($text == "1*2*4*1") {
  $response =  "Neem asseblief die volgende oorspronklike dokumente";
  $response .= "ID/Geboortesertifikaat & Opvoedkundige sertifikaat";
  $response .= "Regsdokumente en mediese dokumente ";
  $response .= "Na die naaste organisasie of polisiekantoor";
  $response .= "Dankie vir die gebruik van ons diens, \n gebring deur Imbokodo \n";
  $response .= "Voer 9 hieronder in om terug te keer na die hoofmanne \n";
  }

  else if ($text == "1*2*4*0") {
    $response = "U versoek is gekanselleer";
    $response =. "Dankie vir die gebruik van ons diens, \n gebring deur Imbokodo";
  }

  else if ($text == "1*2*4*1*9") {
    $response  = "CON  Please select a language \n";
    $response .= "1. English \n";
    $response .= "2. Afrikaans \n";
    $response .= "3. Sotho \n";
    $response .= "4. Zulu \n";
  }

    // Menu for a user who enters "4" from the second menu above
// Will be brought to this sixth menu screen
else if ($text == "1*3*4") {
  $response = "CON Sena ke bakeng sa ho boloka litokomane tsa hau tsa bohlokoa \n li bolokehile mokhatlong o hlophisitsoeng\n";
  $response .= "Ka kopo kenya 1 ho tsoela pele \n";
  $response .= "Ka kopo kenya 0 ho hlakola \n";
  }

   // Menu for a user who enters "1" from the sixth menu
else if ($text == "1*3*4*1") {
  $response =  "Ka kopo nka litokomane tsa mantlha tse latelang";
  $response .= "Setifikeiti sa ID/Tsoalo le setifikeiti sa thuto";
  $response .= "Litokomane tsa molao le litokomane tsa bongaka";
  $response .= "Ho ea mokhatlong o haufi kapa seteisheneng sa mapolesa";
  $response .= "Re leboha ho sebelisa ts'ebeletso ea rona, \nE u tliselitse eona ka Imbokodo \n";
  $response .= "Ho khutlela ho menu ya ka sehloohong, Kenya 9 ka tlase \n";
  }

  else if ($text == "1*3*4*0") {
    $response = "Kopo ea hau e hlakotsoe";
    $response =. "Re leboha ho sebelisa ts'ebeletso ea rona, \n E u tliselitse eona ka Imbokodo";
  }

  else if ($text == "1*3*4*1*9") {
    $response  = "CON  Please select a language \n";
    $response .= "1. English \n";
    $response .= "2. Afrikaans \n";
    $response .= "3. Sotho \n";
    $response .= "4. Zulu \n";
  }

    // Menu for a user who enters "4" from the second menu above
// Will be brought to this sixth menu screen
else if ($text == "1*4*4") {
  $response = "CON Lokhu kwenzelwa ukugcina imibhalo yakho \n ebalulekile iphephile enhlanganweni\n";
  $response .= "Faka u-1 ukuze uqhubeke \n";
  $response .= "Faka u-0 ukuze ukhansele";
  }

    // Menu for a user who enters "1" from the sixth menu
else if ($text == "1*4*4*1") {
  $response =  "Sicela uthathe imibhalo yokuqala elandelayo";
  $response .= "Isitifiketi se-ID/sokuzalwa nesitifiketi semfundo";
  $response .= "Imibhalo yezomthetho nemibhalo yezokwelapha";
  $response .= "Enhlanganweni esiseduzane noma esiteshini samaphoyisa";
  $response .= "Siyabonga ngokusebenzisa insiza yethu, \n Ulethelwe yona yi-Imbokodo \n";
  $response .= "Ukubuyela kumenu ephambili, Faka u-9 ngezansi \n";
  }

  else if ($text == "1*4*4*0") {
    $response = "Isicelo sakho sikhanseliwe";
    $response =. "Siyabonga ngokusebenzisa insiza yethu, n\ Esilethelwe yona yi-Imbokodo";
  }

  else if ($text == "1*1*4*4*9") {
    $response  = "CON  Please select a language \n";
    $response .= "1. English \n";
    $response .= "2. Afrikaans \n";
    $response .= "3. Sotho \n";
    $response .= "4. Zulu \n";
  }


//echo response

header('Content-type: text/plain');
echo $response


?>