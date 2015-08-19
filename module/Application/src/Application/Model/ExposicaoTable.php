<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Application\Model;

use Zend\Db\TableGateway\TableGateway;

/**
 * Description of Colecao
 *
 * @author Fernando Rodrigues
 */
class ExposicaoTable {
    
    protected $table = "exposicao";
    protected $tableGateway;
    
    public function __construct(TableGateway $tableGateway)
    {
        $this->tableGateway = $tableGateway;
    }

    public function fetchAll()
    {
        $resultSet = $this->tableGateway->select();
        return $resultSet;
    }
    
}
