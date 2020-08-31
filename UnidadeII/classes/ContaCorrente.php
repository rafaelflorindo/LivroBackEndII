<?php
require_once('Conta.php');
class ContaCorrente extends Conta{
    private $limite;

    function __construct($agencia, $numeroConta, $titular, $saldo, $limite)
    {
        parent::__construct($agencia, $numeroConta, $titular, $saldo);
        $this->setLimite($limite);
    }
    public function retirar($valor):bool{
        if(($this->getSaldo()+$this->getLimite()) > is_float($valor)){
            parent::retirar($valor);
            if (true)
                return true;
            else
                return false;
        }else
            return false;
    }
    public function exibirExtrato(){
        $dados = ["Titular"=>$this->getTitular(), 
                "Agencia"=>$this->getAgencia(),
                "Conta"=>$this->getNumeroConta(),
                "Saldo"=>$this->getSaldo()
        ];
        return json_encode($dados);
    }

    private function setLimite($limite){
        $this->limite = $limite;
    }
    private function getLimite(){
        return $this->limite;
    }
}
?>