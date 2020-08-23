<?php

class Database
{
    // connection variable
    public $pdo;
    // database information
    // private $databaseHost = '127.0.0.1';
    // private $databaseName = 'enfinkjf_vaayu_2019';
    // private $databaseCharacterSet = 'utf8mb4';
    private $databaseHost = 'localhost';
    private $databaseName = 'enfinkjf_vaayu_2019';
    private $databaseCharacterSet = 'utf8mb4';
    // constructor
    public function __construct(
        // database user credentials
        $databaseUsername,
        $databasePassword,
        // optional default connection attributes
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
        ]
    ) {
        // dsn (database source name)
        $dsn = "mysql:host=$this->databaseHost;dbname=$this->databaseName;charset=$this->databaseCharacterSet;";
        // establish connection using pdo (php data object(s))
        try {
            // check_code_here $pdo = new PDO($dsn, $database_username, $database_password, $options);
            $this->pdo = new \PDO($dsn, $databaseUsername, $databasePassword, $options);
        } catch (\PDOException $error) {
            throw new \PDOException($error->getMessage(), (int)$error->getCode());
        }
    }

    // function to execute a query
    public function run($query, $arguments = NULL)
    {
        if (!$arguments) {
            return $this->pdo->query($query);
        }
        $statement = $this->pdo->prepare($query);
        $statement->execute($arguments);
        return $statement;
    }
}
