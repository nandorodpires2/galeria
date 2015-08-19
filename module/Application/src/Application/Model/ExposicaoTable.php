<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Application\Model;

use Zend\Db\TableGateway\TableGateway;
use Zend\Db\Sql\Sql;

/**
 * Description of Colecao
 *
 * @author Fernando Rodrigues
 */
class ExposicaoTable {
    
    protected $table = "exposicao";
    protected $tableGateway;
    protected $sql;


    public function __construct(TableGateway $tableGateway)
    {
        $this->tableGateway = $tableGateway;
        $this->sql = new \Zend\Db\Sql\Sql($this->tableGateway->adapter);
    }

    public function getQueryAll() {
        $select = $this->sql->select()
                ->from($this->table)
                ->join('usuario', 'exposicao.usuario_id = usuario.usuario_id', array('*'))
                ->join('tipo_exposicao', 'exposicao.tipo_exposicao_id = tipo_exposicao.tipo_exposicao_id', array('*'));
        return $select;
    }

    public function fetchAll()
    {
        $select = $this->getQueryAll();
        
        $resultSet = $this->tableGateway->selectWith($select);
        return $resultSet;
    }
    
}
