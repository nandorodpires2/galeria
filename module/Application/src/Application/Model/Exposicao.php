<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Application\Model;

/**
 * Description of Exposicao
 *
 * @author Fernando Rodrigues
 */
class Exposicao {
    
    protected $exposicao_id = null;
    protected $tipo_exposicao_id = null;
    protected $exposicao_nome = null;
    protected $exposicao_descricao = null;
    protected $exposicao_data_criacao = null;
    protected $exposicao_ativo = null;
    protected $usuario_id = null;
    
    public function exchangeArray($data) {        
        foreach ($data as $key => $value) {
            $this->$key = $value;
        }
        
    }
    
    public function getExposicao_id() {
        return $this->exposicao_id;
    }

    function getTipo_exposicao_id() {
        return $this->tipo_exposicao_id;
    }

    function getExposicao_nome() {
        return $this->exposicao_nome;
    }

    function getExposicao_descricao() {
        return $this->exposicao_descricao;
    }

    function getExposicao_data_criacao() {
        return $this->exposicao_data_criacao;
    }

    function getExposicao_ativo() {
        return $this->exposicao_ativo;
    }

    function getUsuario_id() {
        return $this->usuario_id;
    }

}
