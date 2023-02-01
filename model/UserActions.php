<?php

    class UserActions{

        public function saveUser($connection,$name,$tel,$email){
            $query = "INSERT INTO user (nameuser, email, tel) VALUES ('$name', '$email', '$tel')";
            $result = $connection->query($query);
            if($result){ return true; }
            else{ return false; }
        }

        public function getUserData($connection,$id){
            if($id == 'all'){$query = "SELECT * FROM user";}
            else{$query = "SELECT * FROM user WHERE iduser = '$id'";}
            $result = $connection->query($query);
            $user = array();
            while($row = $result->fetch_assoc()){
                array_push($user, $row);
            }
            return $user;
        }
    }

?>