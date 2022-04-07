<?php
namespace App\Model;

use App\Model\Realisateur;

class Film{
    private int $id;
    private string $titre;
    private int $duree;
    private Realisateur $realisateur;

    public function __construct(int $id = null, string $titre = 'Titanic', int $duree = 120, Realisateur $realisateur)
    {
        $this->id = $id;
        $this->titre = $titre;
        $this->duree = $duree;
        $this->realisateur = $realisateur;
    }
    

    /**
     * Get the value of duree
     */ 
    public function getDuree()
    {
        return $this->duree;
    }

    /**
     * Set the value of duree
     *
     * @return  self
     */ 
    public function setDuree($duree)
    {
        $this->duree = $duree;

        return $this;
    }

    /**
     * Get the value of titre
     */ 
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set the value of titre
     *
     * @return  self
     */ 
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of realisateur
     */ 
    public function getRealisateur()
    {
        return $this->realisateur;
    }

    /**
     * Set the value of realisateur
     *
     * @return  self
     */ 
    public function setRealisateur($realisateur)
    {
        $this->realisateur = $realisateur;

        return $this;
    }
}