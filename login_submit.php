<?php
LoginCheck();
function LoginCheck(){
    session_start();
    $email = $_POST['email'];
    $password = $_POST['password'];

    $canma = ',';
    $ID = $email.$canma.$password;
    $_SESSION['ID'] = $ID;

    $db = new PDO('mysql:host=localhost; dbname=g230taka3','g230taka','');
    $sql = 'SELECT * FROM users WHERE username=? and password=?';
    $stmt = $db->prepare($sql);
    $stmt->execute(array($email,$password));
    $result = $stmt->fetch();
    $stmt = null;
    $db = null;

    if($result[0] != 0){
        header('Location:https://sshg.cs.ehime-u.ac.jp/~g230taka/pbl2/home.php');
        exit;
    }else{
        $err_msg = "IDもしくはパスワードが間違っています。";
    }
}

?>
IDもしくはパスワードが間違っています。<br>
<input type="button" value="戻る" onClick="location.href='login.php'">