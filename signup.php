<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8"/>
<title>新規登録画面</title>
<style>

</style>
</head>
<body>
<font size="6" color="darkorange">Evendertok</font>
    <div align="center">
    <font size="4">新規登録</font><br>
        <form action="signup_submit.php" method="POST">
            <font class="userID">ユーザーID</font>
            <input type="text" name="email" placeholder="ユーザーIDを入力"><br>

            <font class="userPW">パスワード</font>
            <input type="password" name="password" placeholder="パスワードを入力"><br>

            <input type="submit" value="登録" onCLick="return RegisterCheck()">
        </form>
        <input type="button" value="戻る" onClick="location.href='login.php'">
    </div>
</body>
</html>