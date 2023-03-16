<?php

use Db\DBConnect;
use Db\Repository;

class PostgreSQL implements Repository
{
    private $connect;

    public function __construct()
    {
        $this->connect = new PostgrSQLDBConnect();
    }

    public function DBConnection()
    {
        return $this->connect;
    }


    public function DBRecrord(...$data)
    {
      /* логика записи в базу данных */
    }

    public function DBQueryBuiler()
    {
        return new SqlBuilderQuery();
    }
}

class PostgrSQLDBConnect implements DBConnect
{

    public function dbConnect()
    {
        $connection = 'здесь реализуем соединение';
        return $connection;
    }
}

class SqlBuilderQuery
{
    public $where;
    public $from;
    public $select;
    public $limit;

    /**
     * @param $from
     * @return $this
     */
    public function from($from)
    {
        $this->from = $from;
        return $this;
    }

    public function where($where)
    {
        $this->where = $where;
        return $this;
    }

    /**
     * @param $select
     * @return $this
     */
    public function select($select)
    {
        $this->select = $select;
        return $this;
    }

    /**
     * @param $limit
     * @return $this
     */
    public function limit($limit)
    {
        $this->limit = $limit;
        return $this;
    }


    /**
     * @return $this
     */
    public function getCriteries()
    {
        return $this;
    }
}