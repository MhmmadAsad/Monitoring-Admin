<?php

if(isset($_GET["smb"])){
 $smb= $_GET["smb"];
}

else{
 $smb = 1;
}

switch ($smb){

 case "1":
 require_once ("setting.php");
 break;

 case "2":
 require_once ("modul.php");
 break;


 case "3":
 require_once ("sumber.php");
 break;

}
?>
