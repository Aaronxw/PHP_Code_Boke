<?php
namespace Controller;

session_start();

function LoginAction()
{
    $dsn = "mysql:host=localhost;dbname=Boke";
    $username = "root";
    $passwd = "962464";
    $lusername = $_POST['username'];
    $password = $_POST['password'];
    
    try {
        $db_connect = new \PDO($dsn,$username,$passwd);
        $db_connect->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM aaron_usern where name='{$lusername}' AND password='{$password}'";
        //echo $sql;
        $statm = $db_connect->prepare($sql);
        $statm->execute();
        $res = $statm->fetch(\PDO::FETCH_ASSOC);
        //var_dump($res);
        if($res['id'] != 0){
            $_SESSION['userid'] = $res['id'];
            $_SESSION['name'] = $res['name'];
            echo "<script>window.location='../index.php'</script>";
        }else{
            echo "<script>window.location='../Login.html'</script>";
        }
    }
    catch (\PDOException $e){
        $e->getMessage();
    }
}
LoginAction();
?>