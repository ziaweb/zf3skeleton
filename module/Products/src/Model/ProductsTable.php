<?php

namespace Products\Model;

use RuntimeException;
use Zend\Db\TableGateway\TableGatewayInterface;

class ProductsTable
{
    private $tableGateway;

    public function __construct(TableGatewayInterface $tableGateway)
    {
        $this->tableGateway = $tableGateway;
    }

    public function fetchAll()
    {
        return $this->tableGateway->select();
    }

    public function getProducts($id)
    {
        $id = (int) $id;
        $rowset = $this->tableGateway->select(['id' => $id]);
        $row = $rowset->current();
        if (! $row) {
            throw new RuntimeException(sprintf(
                'Could not find row with identifier %d',
                $id
            ));
        }

        return $row;
    }

    public function saveProducts(Products $products)
    {
        $data = [
            'artist' => $products->artist,
            'title'  => $products->title,
        ];

        $id = (int) $products->id;

        if ($id === 0) {
            $this->tableGateway->insert($data);
            return;
        }

        if (! $this->getProducts($id)) {
            throw new RuntimeException(sprintf(
                'Cannot update Productss with identifier %d; does not exist',
                $id
            ));
        }

        $this->tableGateway->update($data, ['id' => $id]);
    }

    public function deleteProducts($id)
    {
        $this->tableGateway->delete(['id' => (int) $id]);
    }
}