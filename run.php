<?php

/*
	Coded By Arikun - { IndoSec }
		Gausah Recode Boss Cuma Simple Code

	Requirtment : PHP 5/7
*/
system('clear');
function Banner()
{
	echo "
 ___      ___ 
|\  \    /  /|
\ \  \  /  / /  v.1.0
 \ \  \/  / / 
  \ \    / / irtual Server
   \ \__/ /  Coded : Arikun Ft Momos { IndoSec }
    \|__|/   Php Req : =>5 / 7
             =======================
Auto Open Browser And Virtual Server 
Masukan Port (Ex: 1000): ";
}

echo Banner();
$port = trim(fgets(STDIN));
system('xdg-open http://localhost:'.$port);
system('php -S localhost:'.$port);

?>
