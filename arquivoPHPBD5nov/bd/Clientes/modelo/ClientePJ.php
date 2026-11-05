<?php

require_once("Ciente.php");

class ClientePJ extends Cliente
{

    private $razaoSocial;
    private $cnpj;



    public function getNome() {
        return $this->razaoSocial;
    }

    public function getNroDoc() {
        return $this->cnpj;
    }

    public function getTipo() {
        return "pessoa juridica";

    }


    /**
     * Get the value of razaoSocial
     */
    public function getRazaoSocial()
    {
        return $this->razaoSocial;
    }

    /**
     * Set the value of razaoSocial
     */
    public function setRazaoSocial($razaoSocial): self
    {
        $this->razaoSocial = $razaoSocial;

        return $this;
    }

    /**
     * Get the value of cnpj
     */
    public function getCnpj()
    {
        return $this->cnpj;
    }

    /**
     * Set the value of cnpj
     */
    public function setCnpj($cnpj): self
    {
        $this->cnpj = $cnpj;

        return $this;
    }
}
