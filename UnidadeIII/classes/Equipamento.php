<?php

class Equipamento
{
    public $codigoEquipamento, $descricao, $dataAquisicao;
    public $tipoEquipamento;

    public function __construct($codigoEquipamento, $descricao, $dataAquisicao, TipoEquipamento $tipoEquipamento)
    {
        $this->codigoEquipamento = $codigoEquipamento;
        $this->descricao = $descricao;
        $this->dataAquisicao = $dataAquisicao;
        $this->tipoEquipamento = $tipoEquipamento;

        $tipoEquipamento->equipamentos[] = $this;
    }
}