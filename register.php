<?php
include "usercontrol.php";
if (isset($_POST['vardas']) &&
    isset($_POST['slaptazodis']) &&
    isset($_POST['elpastas'])
) {
    // Nustatomi vartotojo duomenys
    $vartotojo_vardas = $_POST['vardas'];
    $vartotojo_slaptazodis = $_POST['slaptazodis'];
    $vartotojo_elpastas = $_POST['elpastas'];

    $userctl = new usercontrol();
    $userctl->addUser($vartotojo_vardas, $vartotojo_slaptazodis, $vartotojo_elpastas);
    echo "user added successfully.<br>";
} else {
    echo "Netinkami duomenys.<br>Bandykite is naujo.";
}

