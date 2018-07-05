
<?php

include_once 'Database.php';
session_start();
class Users{

    private $id, $email = "", $password = "", $cpassword="", $name = "", $uname = "";
    private $con = null;

    public function getEmail()
    {
        return $this->email;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getUname()
    {
        return $this->uname;
    }

    public function getCPassword()
    {
        return $this->cpassword;
    }


    public function getName()
    {
        return $this->name;
    }

  public function isExist($newEmail){
        $count = 0;
        $db = new Database();
        $this->con = $db->getConnection();
        $sql = "SELECT COUNT(id) AS `count` FROM `users` WHERE `email` = '".$newEmail."'";
        $result = $this->con->query($sql);

            while ($row = $result->fetch_assoc()) {
                $count = $row['count'];
            }
        return $count;
    }

    public function insert(){

        if(isset($_POST['email']) && isset($_POST['password']) && isset($_POST['cpassword']) && isset($_POST['name']) && isset($_POST['uname'])){
            $this->email = $_POST['email'];
            $this->name = $_POST['name'];
            $this->uname = $_POST['uname'];
            $this->password = $_POST['password'];
            $this->cpassword = $_POST['cpassword'];

            $db = new Database();
            $this->con = $db->getConnection();

            if($this->isExist($this->email) > 0){
                return false;
            }
            else{
                $sql = "INSERT INTO users(email, password, cpassword, name, uname) VALUES('$this->email', '$this->password', '$this->cpassword', '$this->name', '$this->uname')";

                $result = $this->con->query($sql);

                if($result){
                    return true;
                }
                else{
                    return false;
                }
            }
        }
    }

    public function signIn(){

        if(isset($_POST['uname']) && isset($_POST['password'])){
            $this->uname = $_POST['uname'];
            $this->password = $_POST['password'];
            $db = new Database();
            $this->con = $db->getConnection();
            $sql = "SELECT * FROM users WHERE uname = '".$this->uname."' AND password = '".$this->password."'";
            $result = $this->con->query($sql);

            if($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {
                    $this->id = $row['id'];
                    $this->email = $row['email'];
                    $this->password = $row['password'];
                    $this->name = $row['name'];
                    $this->uname = $row['uname'];
                    $_SESSION['session-user'] = $this;//assigning the user object

                    return true;
                }
            }
            else{
                return false;
            }
        }
    }
}
?>