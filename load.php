<?php

if(isset($_GET["smb"])){
 $smb= $_GET["smb"];
}

else{
 $smb = 1;
}

switch ($smb){

 case "1":
 require_once ("index.php");
 break;

 case "2":
 require_once ("settings.php");
 break;


 case "3":
 require_once ("reboot.php");
 break;

 case "4":
 require_once ("about.php");
 break;
}
?>
