<?php
/**
 * Nous sommes dans une class abstraite
 * Nos propriétés doivent etre accessible par les classes filles
 * donc on doit obligatoirement avoir des propriétés protected
 */

namespace App\Entity;

abstract class AbstractPersonnage{

    protected string $nom;
    protected int $pointDeVie; // strictement superieur
    protected bool $vie; // egal à false quand energie = 0 max 100
    protected int $force; // entre 1 et 10 et de facon aleatoire

    public function __construct(string $nom)
    {
        $this->pointDeVie = 100;
        $this->force = rand(1, 10);
        $this->vie = true;
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
     * Get the value of energie
     */ 
    public function getEnergie(): ?int
    {
        return $this->pointDeVie;
    }

    /**
     * Set the value of energie
     *
     * @return  self
     */ 
    public function setEnergie(int $energie)
    {
        $this->pointDeVie = $energie;

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