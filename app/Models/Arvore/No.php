<?php

namespace App\Models\Arvore;

use Illuminate\Database\Eloquent\Model;

class No extends Model
{
    protected $valor; // OBJECT (Premissa)ou(Conclusao)ou(Predicado) - conteudo do "No"
    protected $filho_esquerda; // OBJECT (No) - ramo descendo no esquerda (aplicação da regra)
    protected $filho_centro; // OBJECT (No) - ramo descendo no centro (separação das premissas)
    protected $filho_direita; // OBJECT (No) - ramo descendo no direita (aplicação da regra)
    protected $linha; // INT - Linha em que esta o No
    protected $linhaContradicao;// INT - A linha do nó que encontrou sua contradição 
    protected $linhaDerivacao; // INT - A linha do nó no qual foi derivado
    protected $utilizada; // BOOLEAN - Sê o No já foi utilizado para derivação
    protected $fechado; // true ou false - Indica sê o nó está fechado


    public function __construct($valor,$filho_esquerda,$filho_centro,$filho_direita,$linha,$linhaContradicao,$linhaDerivacao,$utilizada,$fechado){
        $this->valor = $valor;
        $this->filho_direita = $filho_direita;
        $this->filho_esquerda = $filho_esquerda;
        $this->filho_centro = $filho_centro;
        $this->linha = $linha;
        $this->linhaContradicao = $linhaContradicao;
        $this->linhaDerivacao = $linhaDerivacao;
        $this->utilizada = $utilizada;
        $this->fechado = $fechado;
    }

    public function getValorNo(){
        return $this->valor;
    }

    public function setValorNo($valor){
       $this->valor=$valor;
    }

    public function getFilhoCentroNo(){
        return $this->filho_centro;
    }

    public function setFilhoCentroNo($centro){
        $this->filho_centro=$centro;
    }

    public function removeFilhoCentroNo(){
        $this->filho_centro=null;
    }
   
    public function getFilhoDireitaNo(){
        return $this->filho_direita;
    }

    public function setFilhoDireitaNo($direita){
        $this->filho_direita=$direita;
    }

    public function getFilhoEsquerdaNo(){
        return $this->filho_esquerda;
    }

    public function setFilhoEsquerdaNo($esquerda){
        $this->filho_esquerda=$esquerda;
    }

    public function getLinhaNo(){
        return $this->linha;
    }

    public function setLinhaNo($linha){
        $this->linha=$linha;
    }

    public function FecharRamo($linha_contradicao){
        $this->fechado=true;
        $this->linhaContradicao=$linha_contradicao;
   }

    public function setLinhaDerivacao($linhaDerivacao){
        $this->linhaDerivacao=$linhaDerivacao;
    }

    public function getLinhaDerivacao(){
        return $this->linhaDerivacao;
    }

    public function getLinhaContradicao(){
        return $this->linhaContradicao;
    }

    public function isFechado(){
        return $this->fechado;
    }


    public function isUtilizado(){
       return $this->utilizada;
   }

    public function utilizado($valor){
        $this->utilizada=$valor;
    }


}