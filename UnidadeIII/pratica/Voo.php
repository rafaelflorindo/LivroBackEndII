<?php

class Voo
{
    private $aeroportoOrigem, $aeroportoDestino, $dataHoraSaida, $dataHoraChegada;
    public $passagens;
    public $aviao;

    public function __construct()
    {
        $this->aeroportoOrigem = "";
        $this->aeroportoDestino = "";
        $this->dataHoraSaida = "";
        $this->dataHoraChegada = "";
        $this->passagens="";
        $this->passagens=array();
    }

    public function setaeroportoOrigem(Aeroporto $aeroportoOrigem,  Aeroporto $aeroportoDestino,  $dataHoraSaida, $dataHoraChegada, Aviao $aviao){
        $this->aeroportoOrigem = $aeroportoOrigem;
        $this->aeroportoDestino = $aeroportoDestino;
        $this->dataHoraSaida = $dataHoraSaida;
        $this->dataHoraChegada = $dataHoraChegada;
        $this->aviao = $aviao;

        $aeroportoDestino->voo = $this;
        $aeroportoOrigem->voo = $this;
        $aviao->voo[] = $this;
    }
}