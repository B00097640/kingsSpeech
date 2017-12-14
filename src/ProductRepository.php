<?php
namespace Itb;

class ProductRepository
{
    private $connection;

    public function __construct()
    {
        $db = new Database();
        $this->connection = $db->getConnection();
    }


    public function getAll()
    {
        $sql = 'SELECT * FROM products';

        $stmt = $this->connection->prepare($sql);
        $stmt->execute();

        $stmt->setFetchMode(\PDO::FETCH_CLASS, 'Itb\\Product');

        $products = $stmt->fetchAll();

        return $products;
    }

    public function getOne($id)
    {
        $sql = 'SELECT * FROM products WHERE id = :id';

        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        $stmt->setFetchMode(\PDO::FETCH_CLASS, 'Itb\\Product');

        $products = $stmt->fetch();

        return $products;
    }

}