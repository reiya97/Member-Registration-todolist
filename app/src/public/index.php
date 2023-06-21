<?php

require_once '../config/dbconnect.php';

$pdo = connect();

//タグ追加フォームを打ち込んだとき
if (!empty($_POST['submit_user_info'])) {
    try {
        $stmt = $pdo->prepare("INSERT INTO users (username) VALUES (:username)");
        $stmt->bindValue('username', $_POST['username'], \PDO::PARAM_STR);//(文字列として)
        $stmt->execute();

        header('Location: index.php');
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}

$stmt = $pdo->query("SELECT * FROM users");
$users = $stmt->fetchAll();

var_dump($users);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>会員制ToDoList</title>
</head>
<body>
    <form method="post" name="user_info">
        <input type="text" name="username">
        <input type="submit" value="追加" name="submit_user_info">
    </form>
    
</body>
</html>