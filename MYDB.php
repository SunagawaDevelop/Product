<html>
<head>
<TITLE>PHPのテスト</TITLE>
</head>

<body>
<?php
function db_connect() {
    $db_user = "root";
    $db_pass = "kuwagata2022";
    $db_host = "localhost";
    $db_name = "sunagawa";
    $db_type = "mysql";

    $dsn = "$db_type:host=$db_host;dbname=$db_name;charset=utf8";

    try {//test
    $pdo = new PDO($dsn, $db_user, $db_pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    
    print '接続しました。';

    }catch (PDOException $e){
    print('Error:'.$e->getMessage());
    }
    
    return $pdo;
}
?>
</body>
</html>