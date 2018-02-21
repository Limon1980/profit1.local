<?php

namespace App;

class Db

{
    use Singleton;
    protected $dbh;

    protected function __construct()
    {
        $this->dbh = new \PDO('mysql:host=localhost; dbname=test', 'taras', '123456');
    }

    public function execute($sql, $data = [])
    {
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute($data);
        return $res;
    }

    public function query($sql, $class, $data = [])
    {
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute($data);
        if (false !== $res){
            return $sth->fetchAll(\PDO::FETCH_CLASS, $class);
        }
        return [];
    }
}