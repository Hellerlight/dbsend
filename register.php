
<?php

include "usercontrol.php";
//include("usercontrol.php");
//if (isset($_GET['vardas']) && isset($_POST['slaptazodis'])) {
    $vartotojo_vardas = $_POST['vardas'];
    $vartotojo_slaptazodis = $_POST['slaptazodis'];
    echo "vartotojo vardas; $vartotojo_slaptazodis";
    echo "<br> Vartotojo ivestas slaptazodis: $vartotojo_slaptazodis<br>";
    $userctl = new usercontrol();
    echo "new usercontrol";
    $userctl->addTempUser($vartotojo_vardas, $vartotojo_slaptazodis);
    echo "user added successfully.<br>";

//
//} else {
//    echo "No params, failed login.";
//}

