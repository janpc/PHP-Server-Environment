<?php
session_start();
class User {
    private $email;
    private $password;
    
    function __construct($email, $password) {
        $this->password = $password;
        $this->email = $email;
    }
    function get_email() {
        return $this->email;
    }
    function same_password($password) {
        return $this->password===$password;
    }
}

$users=[new User('enric@assembler.com', 'thisIsNotAPassword'), new User('wilmer@assembler.org', 'noMeAcuerdo'), new User('jan@assembler.com', '12345678')];

if(isset( $_POST['email'] ) && isset( $_POST['password'] )){
    $correctEmail=false;
    forEach($users as $user){
        if($_POST['email'] == $user->get_email()){
            $correctEmail=true;
            if($user->same_password($_POST['password'])){
                $_SESSION['email'] = $_POST['email'];
                echo ' suhhh';
                header('Location: ./panel.php');
            }else{
                header('Location: ./index.php?error=2');
            }
        }
    }
    if(!$correctEmail){
        header('Location: ./index.php?error=1');
    }
}else{
    header('Location: ./index.php');
}
?>