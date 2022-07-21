<?php
// 他のファイルを呼び出す
require_once './DbManager.php';


// // DB接続時には、毎ファイル必要！
// // 実機の環境ならサーバのIPアドレスを書く
// $dsn = 'mysql:dbname=selfphp; host=127.0.0.1; charset=utf8';
// $usr = 'root';
// $passwd = 'mariadb';
// try{
//     // データベースに接続するためのインスタンスを作る（new）
//     // PDO は PHP Data Objects の略。PDO を使うことで、どのデータベースを利用する場合でも同じ関数を使うことができます。
//     $db = new PDO($dsn,$usr, $passwd);
//     // この専用のインスタンスに繋がった！

try {
    // 呼び出したいファイルのコード
    $db = getDb();

    // この専用のインスタンスに繋がった！
    print '接続に成功しました。';
} catch (PDOException $e){
    die("接続エラー:{$e->getMessage()}");
} finally {
    $db = null;
}


?>