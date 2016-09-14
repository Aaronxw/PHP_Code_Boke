<?php


function RegsierAction()
{
    $dsn = "mysql:host=localhost;dbname=Boke";
    $username = "root";
    $passwd = "962464";
    $rusername = $_POST['username'];
    $Email = $_POST['email'];
    $password = md5($_POST['password']);
    echo $password;
    try {
        $db_connect = new PDO($dsn,$username,$passwd);
        $db_connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "mysql connect sucessfully";
        $sql = "INSERT INTO aaron_usern VALUES(NULL,'{$rusername}','{$Email}','{$password}')";
        echo $sql;
        $res = $db_connect->query($sql);
        if(!$res){
            echo "<script>window.location='../admin/index.php'</script>";
        }
    }
    catch (PDOException $e){
        $e->getMessage();
    }
}

RegsierAction();
?>