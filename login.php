<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8"/>
<title>ログインページ</title>
<style>
    username{
        width: 250px;
        height: 10em;
    }
</style>
</head>

<body>
<font size="6" color="darkorange">Evendertok</font>
<div class="signin" align="center">
    <font size="4">ログイン</font><br>
    <form action="login_submit.php" method="POST">
        <font class="userID" size="4">ユーザーID</font>
        <input type="text" name="email" placeholder="ユーザーIDを入力"><br>

        <font class="userPW" size="4">パスワード</font>
        <input type="password" name="password" placeholder="パスワードを入力"><br>

        <input type="submit" value="ログイン" name="submit">
    </form>
    <input type="button" value="新規登録" onClick="location.href='signup.php'">
</div>

</body>
</html>