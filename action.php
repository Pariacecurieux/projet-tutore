<?php
//Back-end de notre login
if(isset($_GET['envoyer'])){
    $user=$_GET['username'];
    $pass=$_GET['passwor'];
    echo"vous avez saisi : ".$user."avec comme password: ".$pass;
    // print_r($_GET);
    if ($user=="josue"&&$pass=="jesus") {
        session_start();
        $_SESSION['username']=$user;
        # code...
    }
    else{
        echo "Mot de passe ou utilisateur incorrect";
    }
}
?>