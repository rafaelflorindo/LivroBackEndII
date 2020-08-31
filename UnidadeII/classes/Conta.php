<?php
class Conta{
    protected $agencia, $numeroConta, $titular, $saldo;

    function __construct($agencia, $numeroConta, $titular, $saldo)
    {
        $this->setAgencia($agencia);
        $this->setNumeroConta($numeroConta);
        $this->setTitular($titular);
        $this->setSaldo($saldo);
    }
    
    public function depositar($valor):bool{
        if(is_float($valor) > 0){
            $this->setSaldo($this->getSaldo() + $valor);
            return true;
        }
        else   
            return false;
    }
    public function retirar($valor):bool{
        if(is_float($valor) > 0){
            if($this->getSaldo() > 0){
                $this->setSaldo($this->getSaldo() - $valor);
                return true;
            }
            else   
                return false;
        }else   
            return false;
    }

    private function setAgencia($agencia){
        $this->agencia = $agencia;
    }
    private function setNumeroConta($numeroConta){
        $this->numeroConta = $numeroConta;
    }
    private function setTitular($titular){
        $this->titular = $titular;
    }
    private function setSaldo($saldo){
        $this->saldo = $saldo;
    }
    public function getAgencia(){
        return $this->agencia;
    }
    public function getNumeroConta(){
        return $this->numeroConta;
    }
    public function getTitular(){
        return $this->titular;
    }
    public function getSaldo(){
        return $this->saldo;
    }
}
?>