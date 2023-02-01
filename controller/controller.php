<?php
    require_once dirname( __DIR__ ) .'..\model\UserActions.php';
    require_once dirname( __DIR__ ) .'..\model\Connection.php';

    $userAction = new UserActions();
    $conn = new Connection("localhost","root","","dbsoftware");

    if($_GET['action'] == 'save'){
            if($userAction->saveUser($conn->connect(), $_POST['name'], $_POST['email'], $_POST['tel'])){
                header('Location:../?st=1') ;
            }else{
                header('Location:../?st=0') ;
            }  
    }else if($_GET['action'] == 'show'){
        $users = $userAction->getUserData($conn->connect(),'all');
        require dirname( __DIR__ ) .'../index.php';
    }
?>