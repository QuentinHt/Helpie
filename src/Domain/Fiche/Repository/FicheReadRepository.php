<?php

namespace App\Domain\Fiche\Repository;

use PDO;

/**
 * Repository.
 */
final class FicheReadRepository
{
    /**
     * @var PDO The database connection
     */
    private $connection;

    /**
     * Constructor.
     *
     * @param PDO $connection The database connection
     */
    public function __construct(PDO $connection)
    {
        $this->connection = $connection;
    }

    /**
     * Insert user row.
     *
     * @param array $user The user
     *
     * @return int The new ID
     */
    public function getFiche(array $fiche)
    {
        $sql = "SELECT * FROM fiche";

        $sth = $this->connection->prepare($sql);
        $sth->execute();
        $res = $sth->fetchAll();

        return $res;

        //return (int)$this->connection->lastInsertId();
    }
}