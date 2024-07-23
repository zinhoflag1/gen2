<?php
class Database
{
    private $user;
    private $host;
    private $pass;
    private $dbname;
    private $port;
    public $connect;

    public function __construct()
    {
        $this->user = 'root';
        $this->host = 'localhost';
        $this->pass = '';
        $this->dbname = 'dbsdc';
        $this->port = '3307';

        $dbHandle = new PDO("mysql:host={$this->host};dbname={$this->dbname};port={$this->port}", $this->user, $this->pass);
        $dbHandle->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // always disable emulated prepared statement when using the MySQL driver
        $dbHandle->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

        $this->connect = $dbHandle;

        return $this->connect;

    }
    
}
