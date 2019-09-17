<?php 


if(isset($_SESSION['userInfoProfil'])) {
    
     $_SESSION['userInfoProfil']==1?require_once 'home_corps_admin.php':require_once 'home_corps_driver.php';
   
}
else{   
    ///le home des clients
     require_once 'home_client.php';
    
}

