<?php

abstract class Cliente
{
    //atributos

    protected $id;
    protected $nomeSocial;
    protected $email;

    //metodos

    public abstract function getNome();
    public abstract function getNroDoc();
    public abstract function getTipo();



    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId($id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of nomeSocial
     */
    public function getNomeSocial()
    {
        return $this->nomeSocial;
    }

    /**
     * Set the value of nomeSocial
     */
    public function setNomeSocial($nomeSocial): self
    {
        $this->nomeSocial = $nomeSocial;

        return $this;
    }

    /**
     * Get the value of email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     */
    public function setEmail($email): self
    {
        $this->email = $email;

        return $this;
    }
}
