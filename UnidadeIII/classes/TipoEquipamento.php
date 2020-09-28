<?php

class TipoEquipamento
{
    public $codigoTipoEquipamento, $descricao;
    public $equipamentos;

    public function __construct($codigoTipoEquipamento, $descricao)
    {
        $this->codigoTipoEquipamento= $codigoTipoEquipamento;
        $this->descricao=$descricao;
        $this->equipamentos = array();
    }
}