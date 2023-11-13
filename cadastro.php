<?php
//Classe Cadastro
    class Cadastro{
        //Declaração de variáveis
        private int $rg;
        private string $nome;
        private string $telefone;
        private string $plano;
        private string $escolha;

        public function __construct($rg, $nome, $telefone, $plano, $escolha){
            $this->setRG($rg);
            $this->setNome($nome);
            $this->setTelefone($telefone);
            $this->setPlano($plano);
            $this->setEscolha($escolha);
        }//fim do construtor

        //Métodos modificadores e de consulta
        public function getRG(){
            return $this->rg;
        }//fim do método

        public function getNome(){
            return $this->nome;
        }//fim do método

        public function getTelefone(){
            return $this->telefone;
        }//fim do método

        public function getPlano(){
            return $this->plano;
        }//fim do métood

        public function getEscolha(){
            return $this->escolha;
        }//fim do método

        public function setRG($cpf){
            $this->rg = $rg;
        }//fim do método

        public function setNome($nome){
            $this->nome = $nome;
        }//fim do método

        public function setTelefone($telefone){
            $this->telefone = $telefone;
        }//fim do método

        public function setPlano($plano){
            $this->plano = $plano;
        }//fim do método

        public function setEscolha($escolha){
            $this->escolha = $escolha;
        }//fim do método

        public function imprimir(){
            $msg = "\nNome Completo: ".$this->getNome().
                   "\n\nRG: ".$this->getRG().
                   "\nTelefone: ".$this->getTelefone().
                   "\nPlano de saúde: Sim / Nao: ".$this->getPlano().
                   "\nUso da Farmácia Popular: Sim / Nao: ".$this->getEscolha();
            return $msg;
        }//fim do métodos

        public function excluir(){
            $this->setRG(0);
            $this->setNome("");
            $this->setTelefone("");
            $this->setPlano("");
            $this->setEscolha("");
            return "Dados Excluidos!";
        }//fim do método

        public function atualizar($opcao, $dado){
            switch($opcao){
                case 1:
                    $this->setNome($dado);
                    break;
                case 2:
                    $this->setRG($dado);
                    break;
                case 3:
                    $this->setTelefone($dado);
                    break;
                case 4:
                    $this->setPlano($dado);
                    break;
                case 5:
                    $this->setEscolha($dado);
                    break;
                default:
                    return "Opção escolhida não é válida";
            }//fim do escolha
        }//fim do método    
    }//fim da classe
?>