<?php

class Database
{
    private PDO $pdo;

    /**
     * Database constructor.
     *
     * @param string $path
     */
    public function __construct(string $path)
    {
        $this->pdo = new PDO($path);
        $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $this->initTable();
    }

    private function initTable(): void
    {
        $this->pdo->query('CREATE TABLE IF NOT EXISTS message (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        email VARCHAR(100),
        commentaire VARCHAR(1024) NOT NULL
)');
    }

    /**
     * @return PDO
     */
    public function getPdo(): PDO
    {
        return $this->pdo;
    }

    public function getMessages(): array
    {
        return $this->pdo->query('SELECT * FROM message')
                         ->fetchAll();
    }

    public function insertMessage(
        string $email,
        string $mess
    ): void {
        if ($this->checkMessage($mess) &&
            $this->checkEmail($email) 

        ) {
            $statment = $this->pdo->prepare('INSERT INTO message (email,commentaire) VALUES (:email,:com)');
            $statment->bindValue('email', $email, PDO::PARAM_STR);
            $statment->bindValue('com', $mess, PDO::PARAM_STR);
            $statment->execute();
        }
    }

    private function checkMessage(string $mess): bool
    {
        return $mess !== '' && strlen($mess) <= 1024;
    }

    private function checkEmail(string $email): bool
    {
        return strlen($email) <= 100;
    }

}