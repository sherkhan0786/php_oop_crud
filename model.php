<?php
    class Model{
        private $server = "localhost";
        private $username = "root";
        private $password = "";
        private $db = "oop_crud";
        private $conn;

        public function __construct(){
            try {
                $this->conn = new mysqli($this->server, $this->username, $this->password, $this->db);
            } catch (Exception $e) {
                echo "Connection Failed", $e->getMessage();
            }
        }

        public function insert(){
            if(isset($_POST['submit'])){
                if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['contact']) && isset($_POST['password'])){
                    if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['contact']) && !empty($_POST['password'])){
                        $name = $_POST['name'];
                        $email = $_POST['email'];
                        $contact = $_POST['contact'];
                        $password = $_POST['password'];

                        $query = "INSERT INTO details (name, email, contact, password)
                        VALUES ('$name', '$email', '$contact', '$password')";
                        if ($this->conn->query($query) === TRUE) {
                            echo "<script>alert('New record updated successfully')</script>";
                          } else {
                            echo "Error: " . $query . "<br>" . $conn->error;
                          }
                          
                    }else{
                        echo "<script>alert('Empty')</script>";
                    }
                }
            }
        }

        public function fetch(){
            $data = null;
            $query = "SELECT * FROM details";
            if($sql = $this->conn->query($query)){
                while($row = mysqli_fetch_assoc($sql)){
                    $data[] = $row;
                }
                return $data;
            }
        }

        public function del($id){
            $query = "DELETE FROM details WHERE id = $id";
            if($this->conn->query($query) === TRUE){
                return true;
            }else{
                return false;
            }
        }

        public function read($id){
            $data = null;
            $query = "SELECT * FROM details WHERE id = $id";
            if($sql = $this->conn->query($query)){
                while($row = $sql->fetch_assoc()){
                    $data = $row;
                }
                return $data;
            }
        }

        public function update($data1){
            $query = "UPDATE details SET name = '$data1[name]', email = '$data1[email]', contact = '$data1[contact]', password = '$data1[password]' WHERE id = $data1[id]";
            if ($sql = $this->conn->query($query)) {
				return true;
			}else{
				return false;
			}
        }
    }
?>