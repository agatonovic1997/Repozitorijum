<?php
    session_start();
    require "connection.php";
    $email = $_POST['Email'];
    $password = $_POST['Sifra'];
    $sql = "SELECT IDKorisnika FROM korisnici WHERE Email = '$email' AND Sifra = '$password'";
    $query = mysqli_query($db,$sql);
    $id = mysqli_fetch_assoc($query)['IDKorisnika'];
    if($id){
        $_SESSION['IDKorisnika'] = $id;
        header('Location: index.php');
    }else{
        header('Location: logovanje.php');
    }
?>