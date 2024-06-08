<?php

namespace Dell\Asmphp2\Models;

use Dell\Asmphp2\Commons\Model;

class Product extends Model
{
    protected string $tableName = 'products';

    public function all()
    {
        $this->queryBuilder = $this->conn->createQueryBuilder();

        return $this->queryBuilder
            ->select(
                '*',
                'c.name as c_name')
            ->from($this->tableName, 'p')
            ->innerJoin('p', 'categories', 'c', 'p.category_id = c.id')
            ->orderBy('p.id', 'DESC')
            ->fetchAllAssociative();
    }

    public function paginate($page = 1, $perPage = 10)
    {
        $this->queryBuilder = $this->conn->createQueryBuilder();
        
        $queryBuilder = clone ($this->queryBuilder);

        $offset = $perPage * ($page - 1);

        $data = $queryBuilder
            ->select(
                '*',
                'c.name as c_name')
            ->from($this->tableName, 'p')
            ->innerJoin('p', 'categories', 'c', 'p.category_id = c.id')
            ->setFirstResult($offset)
            ->setMaxResults($perPage)
            ->orderBy('p.id', 'DESC')
            ->fetchAllAssociative();

        $totalPage = ceil($this->count() / $perPage);

        return [$data, $totalPage];
    }

    public function findByID($id)
    {
        $this->queryBuilder = $this->conn->createQueryBuilder();
        return $this->queryBuilder
            ->select(
                '*',
                'c.name as c_name')
            ->from($this->tableName, 'p')
            ->innerJoin('p', 'categories', 'c', 'p.category_id = c.id')
            ->where('p.id = ?')
            ->setParameter(0, $id)
            ->fetchAssociative();
    }
}
