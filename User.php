<?
    include_once 'conexion.php';

    class User{

        private $name;
        private $email;
        private $tel;

        public function __construct($name,$tel,$email){
            $this->name = $name;
            $this->email = $email;
            $this->tel = $tel;
        }

        public function saveUser($conexion){
            $query = "INSERT INTO user (name,email,tel) VALUES ('$this->name, $this->email, $this->tel')";
            $result = $conexion->query($query);
            if($result){ return true; }
            else{ return false; }
        }

        public function getName(){
            return $this->name;
        }

        public function getEmail(){
            return $this->email;
        }

        public function getTel(){
            return $this->tel;
        }
    }

?>