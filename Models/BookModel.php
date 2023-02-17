<?php

namespace App\Models;

class BookModel extends Model
{
    protected $id;
    protected $title;
    protected $id_categorie;
    protected $slug;
    protected $langue;
    protected $autheur;
    protected $ville_fab;
    protected $annee_fab;
    protected $cover_image;
    protected $file_pah;
    protected $description;

    public function __construct()
    {
        $class = str_replace(__NAMESPACE__.'\\', '', __CLASS__);
        $this->table = strtolower(str_replace('Model', '', $class));
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
     */
    public function setId($id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     */
    public function setTitle($title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of slug
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set the value of slug
     */
    public function setSlug($slug): self
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get the value of langue
     */
    public function getLangue()
    {
        return $this->langue;
    }

    /**
     * Set the value of langue
     */
    public function setLangue($langue): self
    {
        $this->langue = $langue;

        return $this;
    }

    /**
     * Get the value of autheur
     */
    public function getAutheur()
    {
        return $this->autheur;
    }

    /**
     * Set the value of autheur
     */
    public function setAutheur($autheur): self
    {
        $this->autheur = $autheur;

        return $this;
    }

    /**
     * Get the value of ville_fab
     */
    public function getVilleFab()
    {
        return $this->ville_fab;
    }

    /**
     * Set the value of ville_fab
     */
    public function setVilleFab($ville_fab): self
    {
        $this->ville_fab = $ville_fab;

        return $this;
    }

    /**
     * Get the value of annee_fab
     */
    public function getAnneeFab()
    {
        return $this->annee_fab;
    }

    /**
     * Set the value of annee_fab
     */
    public function setAnneeFab($annee_fab): self
    {
        $this->annee_fab = $annee_fab;

        return $this;
    }

    /**
     * Get the value of cover_image
     */
    public function getCoverImage()
    {
        return $this->cover_image;
    }

    /**
     * Set the value of cover_image
     */
    public function setCoverImage($cover_image): self
    {
        $this->cover_image = $cover_image;

        return $this;
    }

    /**
     * Get the value of file_pah
     */
    public function getFilePah()
    {
        return $this->file_pah;
    }

    /**
     * Set the value of file_pah
     */
    public function setFilePah($file_pah): self
    {
        $this->file_pah = $file_pah;

        return $this;
    }

    /**
     * Get the value of description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     */
    public function setDescription($description): self
    {
        $this->description = $description;

        return $this;
    }


    /**
     * Set the value of id_categorie
     */
    public function setIdCategorie($id_categorie): self
    {
        $this->id_categorie = $id_categorie;

        return $this;
    }
}