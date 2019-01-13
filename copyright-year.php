<?php

//Developed by Keith Griffiths.

//This line gets the current time off the server
$time = time () ;
 
//This line formats it to display just the year
$year= date("Y",$time);
 
//this line prints out the copyright date range.
echo "Copyright © 2019 - $year. All rights reserved.";

?>
