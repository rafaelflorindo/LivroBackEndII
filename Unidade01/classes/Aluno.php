<?php
    class Aluno {
        private $matricula;
        public $nome;
        private $notas;
        
        function __construct($matricula, $nome)
        {
            $this->notas = array();
            $this->matricula = $matricula;
            $this->nome = $nome;
        }
        public function setNotas($nota):int
        {
            if(count($this->notas) < 4)
            {
                $this->notas[]=$nota;
                return 1;
            }
            else
                return 0;
        }
        public function obterNotas()
        {
            foreach($this->notas as $posicao => $nota)
            {
                echo "<br>Nota [" . ($posicao+1) ."] = ". $nota;
            }
        }
        public function obterMedia():float
        {
            $soma = 0;
            for($i=0; $i<count($this->notas); $i++)
            {
                $soma += $this->notas[$i];
            }
            $media = $soma/count($this->notas);
            return $media;
        }
    }
?>