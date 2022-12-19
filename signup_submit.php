<?php
    if(isset($_POST['email'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $db = new PDO('mysql:host=localhost; dbname=g230taka3','g230taka','');
        $sql = 'INSERT INTO users(username, password) VALUES(:username, :password)';
        $stmt = $db->prepare($sql);

        $params = array(':username' => "$email", ':password' => "$password");

        $stmt->execute($params);
        $db = null;
    }
?>
登録が完了しました。
<input type="button" value="戻る" onClick="location.href='login.php'">