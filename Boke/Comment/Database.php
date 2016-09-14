<?php
namespace Comment;

class Database
{
    private $dsn = "mysql:host=localhost;dbname=Boke";
    private $username = "root";
    private $passwd = "962464";
    public static $instance;
    public $Db_Connect;
    
    private function __construct()
    {
        try {
            $Db_Connect = new \PDO($this->dsn,$this->username,$this->passwd);
            $Db_Connect->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            
        }catch (\PDOException $e){
            $e->getMessage();
        }
    }
    
    private function __clone()
    {
        
    }
    
    public static function GetInstance()
    {
        if(!(self::$instance instanceof self))
        {
            self::$instance = new Database();
            return self::$instance;
        }else 
        {
            return self::$instance;
        }
    }
    
    public function Insert($sql)
    {
        $this->Db_Connect->exec($sql);
    }
    
    public function Update($key,$value)
    {
        $sql = "UPDATE user_admin SET {$key}={$value}";
        echo $sql;
    }
    
    public function Delete($key,$value)
    {
        $sql = "DELETE FROM user_admin WHERE {$key}={$value}";
        echo $sql;
    }
    
    public function Select($key,$value)
    {
        $sql = "SELECT * FROM user_admin WHERE {$key}='{$value}'";
        echo $sql;
        
    }
}

?>