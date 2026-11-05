<?php

require_once("Ciente.php");


class ClientePF extends Cliente
{

    private $nomeCompleto;
    private $cpf;

    //metodos

    public function getNome() {
        return $this->nomeCompleto;
    }

    public function getNroDoc() {
        return $this->cpf;
    }

    public function getTipo() {
        return "pessoa fisica";

    }




    /**
     * Get the value of nomeCompleto
     */
    public function getNomeCompleto()
    {
        return $this->nomeCompleto;
    }

    /**
     * Set the value of nomeCompleto
     */
    public function setNomeCompleto($nomeCompleto): self
    {
        $this->nomeCompleto = $nomeCompleto;

        return $this;
    }

    /**
     * Get the value of cpf
     */
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * Set the value of cpf
     */
    public function setCpf($cpf): self
    {
        $this->cpf = $cpf;

        return $this;
    }
}
