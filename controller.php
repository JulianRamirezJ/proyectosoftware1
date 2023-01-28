<?php
    include("UserActions.php");
    include("Connection.php");

    $userAction = new UserActions();
    $conn = new Connection("localhost","root","","dbsoftware");

    if($_GET['action'] == 'save'){
            if($userAction->saveUser($conn->connect(), $_POST['name'], $_POST['email'], $_POST['tel'])){
                header('Location:index.php?status=1') ;
            }else{
                header('Location:index.php?status=0') ;
            }
            
    }
?>