<?php

abstract class Personnage{

    private string $nom;
    private int $energie;
    private bool $vie;
    private int $force;

    public function __construct($nom)
    {
        $this->nom = $nom;
    }

    /**
     * Get the value of nom
     */ 
    public function getNom(): ?string
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom(string $nom) : self
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of energie
     */ 
    public function getEnergie(): ?int
    {
        return $this->energie;
    }

    /**
     * Set the value of energie
     *
     * @return  self
     */ 
    public function setEnergie(int $energie)
    {
        $this->energie = $energie;

        return $this;
    }

    /**
     * Get the value of vie
     */ 
    public function getVie(): ?bool
    {
        return $this->vie;
    }

    /**
     * Set the value of vie
     *
     * @return  self
     */ 
    public function setVie(bool $vie) : self
    {
        $this->vie = $vie;

        return $this;
    }

    /**
     * Get the value of force
     */ 
    public function getForce():?int 
    {
        return $this->force;
    }

    /**
     * Set the value of force
     *
     * @return  self
     */ 
    public function setForce(int $force) : self
    {
        $this->force = $force;

        return $this;
    }
}